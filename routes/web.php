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
// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => ' ',
        'email' => 'randiroyandi@gmail.com',
        'image' => 'black.jpg'
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        'title' => 'posts',
        'nama' => '',
        'email' => '',
        'image' => ''
    ]);
});





























Route::get('/aritmatika', function () {
    $a = 10;
    $b = 20;

    // Contoh operasi aritmatika
    $sum = $a + $b;        // Penjumlahan
    $difference = $a - $b; // Pengurangan
    $product = $a * $b;    // Perkalian
    $quotient = $a / $b;   // Pembagian

    // Mengirim hasil ke view
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

