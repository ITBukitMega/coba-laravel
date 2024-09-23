@extends("layouts/main")

@section("container")
<h3>Post Category : {{$category}}</h3>
@foreach ($posts as $p )
    <article class="mb-5">
    <h2><a href="/blog/{{ $p->slug }}">{{$p->title}}</a></h2>
    <p>{{$p->excerpt}}</p>
    </article>

@endforeach
@endsection