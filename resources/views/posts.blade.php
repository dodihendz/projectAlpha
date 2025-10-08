{{-- @dd($posts)  sama seperti var_dum --}}
@extends('layouts.main')

@section('container')
@foreach ($posts as $pst)
<article class=" mb-5 border-bottom pb-3">
    <h2>
        <a href="/posts/{{$pst->slug}}" class="text-decoration-none"> {{ $pst->title }}</a>
    </h2>
    <h5>By.<a href="#" class="text-decoration-none">{{ $pst->user->name}}</a> In <a href="/categories/{{$pst->category->slug}}" class="text-decoration-none">{{ $pst->category->slug}}</a></h5>
    <p>{{ $pst->excerpt }}</p>
    <a href="/posts/{{$pst->slug}}" class="text-decoration-none">Read More ....</a>
</article>
@endforeach
@endsection