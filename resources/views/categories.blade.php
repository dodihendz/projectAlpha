{{-- @dd($posts)  sama seperti var_dum --}}
@extends('layouts.main')

@section('container')
<article class=" mb-5 border-bottom pb-3">
    <h2>Categories</h2>

    @foreach ($categories as $category)
    <ul>
        <li>
            <h2>
                <a href="/categories/{{$category->slug}}">
                    {{ $category->name }}
                </a>
            </h2>
        </li>
    </ul>
@endforeach
@endsection