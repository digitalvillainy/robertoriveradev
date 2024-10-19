<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

$blogController = new BlogController();

Route::get("/", fn() => view("home", [
    "posts" => $blogController->getFilesWithMeta()
]));

Route::get("/blog/{slug}", fn(string $slug) => view("blog", [
    "post" => $blogController->getPost($slug)
]));

Route::get('/uses', fn() => view("uses"));


require __DIR__ . "/auth.php";
