@extends("layouts/main")

@section("container")
<h3>Halaman Blog Post</h3>
@foreach ($Posts as $p )
    <article class="mb-5 border-bottom pb-5">
    <h2><a href="/blog/{{ $p->slug }}" class="text-decoration-none">{{$p->title}}</a></h2>

    <p>By: <a href="#" class="text-decoration-none"> {{ $p->user->name }} </a> in <a href="/categories/{{$p->category->slug}}" class="text-decoration-none">{{$p->category->name}}</a></p>
    <p>{{$p->excerpt}}</p>
    <a href="/blog/{{ $p->slug }}" class="text-decoration-none">Read More...</a>
    </article>

@endforeach
@endsection