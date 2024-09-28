<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
// Web Routes
|--------------------------------------------------------------------------
// Here is where you can register web routes for your application.
// These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

// Mendefinisikan $blog_posts di awal
$blog_posts = [
    [
        'title' => 'Judul Post Pertama',
        'slug' => 'judul-post-pertama',
        'author' => 'Royandi',
        'body' => 'Belajar pemrograman adalah perjalanan yang menarik dan penuh tantangan. Di era digital saat ini, keterampilan pemrograman menjadi salah satu kemampuan yang paling dicari di berbagai industri. Baik itu di bidang teknologi, kesehatan, keuangan, maupun pendidikan, pemrograman memiliki peranan penting dalam menciptakan solusi yang efisien dan efektif. Ketika kita belajar pemrograman, kita tidak hanya belajar tentang cara menulis kode, tetapi juga cara berpikir logis dan memecahkan masalah. 

            Dalam dunia yang semakin terkoneksi ini, pemrograman membuka banyak peluang. Dengan belajar bahasa pemrograman seperti Python, Java, atau JavaScript, kita bisa menciptakan aplikasi, website, dan bahkan sistem yang kompleks. Misalnya, Python terkenal dengan sintaksisnya yang sederhana dan mudah dipahami, menjadikannya pilihan ideal bagi pemula. Bahasa ini banyak digunakan dalam data science, machine learning, dan pengembangan web.

            Selain itu, belajar pemrograman juga memberikan kita keterampilan analitis yang kuat. Ketika kita mengerjakan proyek pemrograman, kita dituntut untuk memecahkan berbagai masalah yang muncul, mulai dari kesalahan sintaksis hingga masalah logika. Proses ini mengajarkan kita untuk berpikir kritis dan menemukan solusi secara sistematis. Selain itu, keterampilan ini sangat berguna dalam kehidupan sehari-hari, tidak hanya dalam konteks pemrograman, tetapi juga dalam pengambilan keputusan dan perencanaan.

            Salah satu tantangan dalam belajar pemrograman adalah banyaknya pilihan bahasa dan teknologi yang tersedia. Setiap bahasa pemrograman memiliki kelebihan dan kekurangan masing-masing. Oleh karena itu, penting untuk memilih bahasa yang sesuai dengan tujuan belajar kita. Jika kita tertarik dengan pengembangan web, belajar HTML, CSS, dan JavaScript adalah langkah awal yang baik. Jika kita ingin masuk ke bidang data science, Python dan R adalah bahasa yang sering digunakan.

            Selain mempelajari bahasa pemrograman, kita juga perlu memahami konsep dasar pemrograman, seperti variabel, pengulangan, pengkondisian, dan struktur data. Konsep-konsep ini adalah fondasi yang akan membantu kita saat menulis kode di bahasa pemrograman manapun. Ada banyak sumber belajar yang bisa kita akses, mulai dari buku, video tutorial, hingga kursus online. Banyak platform seperti Codecademy, Coursera, dan Udemy yang menawarkan kursus pemrograman untuk berbagai level.

            Praktek adalah kunci untuk menguasai pemrograman. Semakin sering kita menulis kode, semakin kita akan memahami cara kerja bahasa tersebut. Proyek nyata, baik itu proyek pribadi atau kolaborasi, akan memberikan pengalaman berharga yang tidak bisa didapatkan hanya dengan membaca atau menonton. Cobalah untuk membuat aplikasi kecil atau kontribusi ke proyek open source. Ini akan memberi kita wawasan tentang bagaimana pemrograman diterapkan dalam dunia nyata.

            Komunitas juga merupakan bagian penting dalam belajar pemrograman. Bergabung dengan forum atau grup pemrograman akan membantu kita mendapatkan dukungan, berbagi pengalaman, dan belajar dari orang lain. Komunitas pemrograman sering kali bersifat inklusif dan siap membantu pemula, sehingga jangan ragu untuk bertanya dan berbagi.

            Akhirnya, ingatlah bahwa belajar pemrograman adalah perjalanan yang membutuhkan waktu dan kesabaran. Setiap orang belajar dengan cara yang berbeda, jadi temukan metode yang paling cocok untuk diri Anda. Jangan takut untuk membuat kesalahan, karena itu adalah bagian dari proses belajar. Dengan tekad dan usaha yang konsisten, Anda akan menemukan diri Anda menjadi seorang programmer yang terampil dan siap menghadapi tantangan di dunia teknologi.'
    ],
    [
        'title' => 'Judul Post Kedua',
        'slug' => 'judul-post-kedua',
        'author' => 'Roy',
        'body' => 'Pemrograman bukan hanya sekedar aktivitas teknis, tetapi juga merupakan seni dalam menciptakan solusi untuk berbagai masalah. Saat kita menulis kode, kita menciptakan sesuatu dari nol, dan ini bisa sangat memuaskan. Dalam dunia yang penuh dengan perubahan, kemampuan untuk beradaptasi dengan teknologi baru dan belajar bahasa pemrograman baru adalah keterampilan yang sangat berharga. 

            Keterampilan pemrograman memungkinkan kita untuk berkontribusi dalam proyek yang dapat memberikan dampak positif bagi masyarakat. Misalnya, dengan pemrograman, kita dapat mengembangkan aplikasi yang membantu orang mengakses informasi, berkomunikasi, atau bahkan menyelesaikan tugas sehari-hari dengan lebih efisien. Dalam bidang kesehatan, teknologi pemrograman telah membantu dalam pengembangan perangkat medis yang menyelamatkan nyawa. Dalam pendidikan, aplikasi pembelajaran online memberikan akses kepada siswa di seluruh dunia untuk mendapatkan pendidikan berkualitas.

            Selain itu, belajar pemrograman juga memberi kita alat untuk menciptakan inovasi. Banyak startup teknologi lahir dari ide-ide sederhana yang diubah menjadi aplikasi atau layanan yang bermanfaat. Ketika kita belajar pemrograman, kita juga belajar untuk berpikir kreatif dan menemukan cara baru untuk memecahkan masalah. Keterampilan ini akan sangat berharga dalam dunia kerja, di mana inovasi menjadi kunci keberhasilan.

            Dalam proses belajar, penting untuk tetap termotivasi dan tidak mudah menyerah. Ada kalanya kita akan mengalami kesulitan dalam memahami konsep tertentu atau ketika proyek yang kita kerjakan tidak berjalan sesuai rencana. Di sinilah pentingnya memiliki sikap yang positif dan percaya pada kemampuan diri sendiri. Ingatlah bahwa setiap programmer, bahkan yang paling berpengalaman sekalipun, pernah mengalami kebingungan dan kegagalan.

            Untuk membantu menjaga motivasi, cobalah untuk menetapkan tujuan belajar yang jelas dan terukur. Misalnya, Anda dapat menargetkan untuk menyelesaikan kursus tertentu dalam waktu sebulan, atau membangun proyek kecil dalam waktu dua minggu. Dengan memiliki tujuan, Anda akan lebih fokus dan memiliki arah yang jelas dalam proses belajar Anda.

            Selain itu, jangan ragu untuk mencari mentor atau bergabung dengan kelompok belajar. Belajar bersama orang lain tidak hanya membuat proses lebih menyenangkan, tetapi juga memberi Anda kesempatan untuk saling mendukung dan berbagi pengetahuan. Banyak programmer yang bersedia membagikan pengalaman dan membantu pemula. Manfaatkan kesempatan ini untuk belajar dari orang lain.

            Secara keseluruhan, belajar pemrograman adalah perjalanan yang penuh dengan pembelajaran dan pertumbuhan. Dengan dedikasi, ketekunan, dan sikap positif, Anda dapat menguasai keterampilan ini dan menciptakan berbagai karya yang berdampak positif. Ingatlah bahwa setiap langkah kecil yang Anda ambil menuju tujuan Anda adalah langkah menuju kesuksesan. Selamat belajar pemrograman dan semoga sukses!'
    ],
];

// Definisi rute web
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

Route::get('/blog', function () use ($blog_posts) { // Menggunakan $blog_posts di sini
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts,
    ]);
});

Route::get('posts/{slug}', function($slug) use ($blog_posts) { // Menggunakan $blog_posts di sini
    $new_post = [];
    foreach($blog_posts as $post) {
        if($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
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
