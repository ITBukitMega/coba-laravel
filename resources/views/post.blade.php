@extends("layouts/main")

@section("container")

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        <h2> {{ $post->title }} </h2>
        <p>By: <a href="/authors/{{$post->user->name}}" class="text-decoration-none"> {{$post->user->name}} </a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>
        <img src="https://picsum.photos/1200/400" alt="" class="img-fluid">

        <article class="my-3 fs-5">
        {!! $post->body !!}
        </article>


<a href="/blog" class="d-block mt-3">Back to Post</a>
        </div>
    </div>
</div>
<article>





@endsection
