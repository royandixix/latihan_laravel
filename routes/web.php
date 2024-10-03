<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\map;

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
Route::get('/posts', [PostController::class, 'index']);
// Route untuk menampilkan post berdasarkan slug
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

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


