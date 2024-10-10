{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class=" mb-5">Post Categories</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->nama }}</a></h2>

                {{-- <h5>By : {{ $post['author'] }}</h5> --}}
                {{-- <p>{{ $category->body }}</p> --}}
            </li>
            
        </ul>
    @endforeach
@endsection
