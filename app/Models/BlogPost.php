<?php

namespace App\Models;

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

    public function getPost(string $filename): array
    {
        $filePath = resource_path($this->path . "/{$filename}.md");
        if(File::exists($filePath)) {
            $allFiles = $this->getFiles();
            $file = $allFiles->filter(fn($value, $key) => $value->getFilename() === $filename . ".md")[0];
            return $this->parsePost($file->getPathname());
        }
        return [];
    }

    public function parsePost(string $file): array
    {
        $metadata = YamlFrontMatter::parse(file_get_contents( $file));
        return [
            $metadata->matter(),
            $metadata->body(),
        ];
    }

}
