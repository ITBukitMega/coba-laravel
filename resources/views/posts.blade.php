@extends("layouts/main")

@section("container")
<h3>Halaman Blog Post</h3>
@foreach ($Posts as $p )
    <article class="mb-5">
    <h2><a href="/blog/{{ $p->slug }}">{{$p->title}}</a></h2>
    <p>{{$p->excerpt}}</p>
    </article>

@endforeach
@endsection