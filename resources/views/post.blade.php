@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <article>
        

                <p>By. <a href="/posts?user={{ $post->user->username }}">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }} </a></p>

                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid ">
                </div>
                
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid ">
                    
                @endif
                
                {{-- {{ $post->body }} --}}
                <article class="my-3">
                    {!! $post->body !!}

                </article>
            </article>
            <a href="/posts" class="d-block">Back To Posts</a>
        </div>
    </div>
</div>
   
@endsection