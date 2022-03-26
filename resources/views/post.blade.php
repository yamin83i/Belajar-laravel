@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <P>By. <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name  }}</a></P>

            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
                
            @else
                
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
            @endif

            <article class="my-3">

                {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block m-3">back to post</a>
        </div>
    </div>
</div>


@endsection