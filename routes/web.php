<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These routes
| are loaded by the RouteServiceProvider and all of them will be assigned to 
| the "web" middleware group. Make something great!
*/

// Route untuk halaman utama
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// Route untuk halaman about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Royandi",
        "email" => "Randiroyandi@gmail.com",
        "image" => "black.jpg"
    ]);
});

// Route untuk menampilkan semua post
Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" =>  Post::all()
    ]);
});

// Route untuk menampilkan post berdasarkan slug
Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            "title" => "judul Post Pertama",
            "slug" => "judul-post-prtama",
            "author" => "Royandi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur laboriosam necessitatibus tenetur doloremque! Soluta fuga delectus, veritatis excepturi aut quasi dolore eligendi quam ipsa optio illo inventore sit a! Est?"
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Roy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur laboriosam necessitatibus tenetur doloremque! Soluta fuga delectus, veritatis excepturi aut quasi dolore eligendi quam ipsa optio illo inventore sit a! Est?"
        ]
    ];

    $new_post = [];
    foreach ($posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

// Route untuk operasi aritmatika sederhana
Route::get('/aritmatika', function () {
    $a = 10;
    $b = 20;

    // Contoh operasi aritmatika
    $sum = $a + $b;        // Penjumlahan
    $difference = $a - $b; // Pengurangan
    $product = $a * $b;    // Perkalian
    $quotient = $a / $b;   // Pembagian

    return view('aritmatika', [
        'title' => 'Aritmatika',
        'a' => $a,
        'b' => $b,
        'sum' => $sum,
        'difference' => $difference,
        'product' => $product,
        'quotient' => $quotient
    ]);
});
