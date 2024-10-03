@extends('layouts.main')

@section('container')
    <article>
       <h1>{{ $post->title }}</h1>
       <p>{{ $post->excerpt }}</p>
       <div>{!! $post->body !!}</div> <!-- Pastikan Anda menggunakan tanda kurung dua kali untuk menampilkan HTML -->
    </article>

    <a href="/posts">Kembali</a> <!-- Menambahkan kelas Bootstrap untuk tombol -->
@endsection
