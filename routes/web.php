<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// Route untuk halaman About
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Royandi',
        'email' => 'royandi@example.com',
        'img' => 'black.jpg'
    ]);
});

// Route untuk halaman Posts (Blog)
Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Royandi Ngoidng',
            'body' => 'Lorem ipsum dolor sit amet...'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Randi Laravel',
            'body' => 'Lorem ipsum dolor sit amet consectetur...'
        ],
    ];

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

// Route untuk halaman single post
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Royandi Ngoidng',
            'body' => 'Lorem ipsum dolor sit amet...'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Randi Laravel',
            'body' => 'Lorem ipsum dolor sit amet consectetur...'
        ],
    ];

    $post = collect($blog_posts)->firstWhere('slug', $slug);

    if (!$post) {
        abort(404);
    }

    return view('post', [
        'title' => $post['title'],
        'post' => $post
    ]);
});

// Route untuk halaman Login
Route::get('/login', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});
