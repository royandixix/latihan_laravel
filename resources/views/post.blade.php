
@extends('layouts.main')

@section('container')
    <article>
       <h5>{{ $post['title'] }}</h5>
       <h5>{{ $post['author'] }}</h5>
       <p>{{ $post['body'] }}</p>
    </article>

    <a href="/posts">Kembali</a>
@endsection