@extends("dashboard.layouts.main")
@section("container")
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <h2 class="mb-5">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success btn-sm">
                <span class=" bi bi-arrow-left-circle"></span>
                back to all my posts
            </a>
            <a href="" class="btn btn-warning btn-sm">
                <span class=" bi bi-pencil-square"></span>
                Edit
            </a>
            <a href="" class="btn btn-danger btn-sm">
                <span class="bi bi-x-circle"></span>
                Delete
            </a>
            <!-- <p>{{ $post->body }}</p> -->
            <br>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-3"
                alt="{{ $post->category->name }}">
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
        </div>
    </div>
</div>
@endsection