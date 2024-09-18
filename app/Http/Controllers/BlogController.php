<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class BlogController extends Controller
{
    public function getFiles(): Collection
    {
        return (new BlogPost)->getFiles();
    }

    public function getPost(string $filename): array
    {
        return (new BlogPost)->getPost($filename);
    }
}
