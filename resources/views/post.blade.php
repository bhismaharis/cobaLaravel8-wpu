@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h1>
            {{ $post->title }}
        </h1>
        <p>By: Bhisma Haris in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection