<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Sinnbeck\Markdom\Facades\Markdom;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class BlogPost extends Model
{
    use HasFactory;

    public Collection $filenames;
    public const POSTS_PATH = 'markdown';
    public string $path = self::POSTS_PATH;

    public function getFiles(): Collection
    {
        return collect(File::allFiles(resource_path($this->path), true));
    }

    public function getFilesWithMeta(): Collection
    {
        $allFiles = $this->getFiles();
        return $allFiles->map(fn($value, $key) => $this->parseBlogPosts($value->getPathname()));
    }

    public function getPost(string $filename): array
    {
        $filePath = resource_path($this->path . "/{$filename}.md");
        if (File::exists($filePath)) {
            $allFiles = $this->getFiles();
            $file = $allFiles->filter(
                fn($value, $key) => $value->getFilename() === $filename . ".md"
            )->first();
            return $this->parsePost($file->getPathname());
        }
        return [];
    }

    public function parseBlogPosts(string $file): array
    {
        $metadata = YamlFrontMatter::parse(file_get_contents($file));
        $date = Carbon::parse($metadata->matter('date'))->format('F j, Y');
        return [
            ...$metadata->matter(),
            'printDate' => $date
        ];
    }

    public function parsePost(string $file): array
    {
        $metadata = YamlFrontMatter::parse(file_get_contents($file));
        return [
            $metadata->matter(),
            'title' => $metadata->matter('title'),
            'content' => $metadata->body(),
        ];
    }

}
