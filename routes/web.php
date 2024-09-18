<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

$blogController = new BlogController();

Route::get("/", fn() => view("home"));

Route::get('/blog', fn() => view("blogs", [
    "posts" => $blogController->getFilesWithMeta()
]));

Route::get("/blog/{slug}", fn(string $slug) => view("blog", [
    "post" =>$blogController->getPost($slug)
]));

require __DIR__ . "/auth.php";
