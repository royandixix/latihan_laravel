{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    {{-- <h1>HALAMA POST</h1>     --}}
    {{-- <h2>Judul</h2>
    <h2>Penulis</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, voluptatibus sequi perspiciatis blanditiis iste repudiandae recusandae temporibus cupiditate architecto dolor inventore corporis earum modi est illo vitae odit quisquam iusto!</p> --}}

    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
        </h2>
        <h2>{{ $post['author'] }}</h2>
      
    </article>
    @endforeach
@endsection

