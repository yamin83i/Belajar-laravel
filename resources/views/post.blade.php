@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <P>By. Ash in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name  }}</a></P>
    {!! $post->body !!}
</article>

<a href="/blog">back to post</a>
@endsection