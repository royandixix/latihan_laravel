@extends('layouts.main') <!-- pastikan layout merujuk ke direktori yang benar -->

@section('container')
    <h1>Halaman About</h1>
    
    <h2>Nama: {{ $name }}</h2>
    <p>Email: {{ $email }}</p>
    
    <!-- Menampilkan gambar dengan menggunakan helper asset -->
    <img src="{{ asset('img/' . $img) }}" alt="Gambar Profil" width="200" class="img-thumbanil rounded-circle" >
@endsection
