@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <h5>By.<a href="#" class="text-decoration-none">{{ $post->category->name}}</a> In <a href="/categories/{{$post->category->slug}}">{{ $post->category->slug}}</a></h5>
    <!-- <p>{{ $post->body }}</p> -->
    <p>{!! $post->body !!}</p>
</article>
<a href="/blog">Back to Blog</a>
@endsection