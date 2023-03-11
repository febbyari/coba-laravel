@extends('layouts.main')

@section('container')
    <article>
        <h2>Post Category : {{ $category }}</h2>

        <p>By. Anonm <a href="/categories/{{ $posts->category->slug }}"> {{ $posts->category->name }} </a></p>
        
        {{-- {{ $post->body }} --}}
    {!! $post->body !!}
    </article>
    <a href="/posts">Back To Posts</a>
@endsection