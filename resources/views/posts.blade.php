{{-- @dd($posts)  sama seperti var_dum --}}
@extends('layouts.main')

@section('container')
@foreach ($posts as $pst)
<article class=" mb-5 border-bottom pb-3">
    <h2>
        <a href="/posts/{{$pst['slug']}}">Judul {{ $pst["title"] }}</a>
    </h2>
    <h5>By. {{ $pst["author"] }}</h5>
    <p>{{ $pst["body"] }}</p>
</article>
@endforeach
@endsection