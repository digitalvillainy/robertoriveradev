<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

$blogController = new BlogController();

Route::get("/", function () {
    return view("home");
});

Route::get('/blog', function () use ($blogController) {
    dd($blogController->getFiles());
    $posts = $blogController->getFiles()->map(fn ($file) => $file->getFilenameWithoutExtension());
    return view("blogs", ["posts" => $posts]);
});


Route::get("/blog/{slug}", function (string $slug) use ($blogController) {
    $post = $blogController->getPost($slug);
    return view("blog", ["post" => $post]);
});

require __DIR__ . "/auth.php";
