@extends('layouts.main')

@section('container')
<div class="card p-4">
    <h1>Halaman Posts</h1>
    <h2>Nilai A: {{ $a }}</h2>
    <h2>Nilai B: {{ $b }}</h2>
    <hr>
    <h2>Penjumlahan (A + B): {{ $sum }}</h2>
    <h2>Pengurangan (A - B): {{ $difference }}</h2>
    <h2>Perkalian (A * B): {{ $product }}</h2>
    <h2>Pembagian (A / B): {{ $quotient }}</h2>
</div>
@endsection
       