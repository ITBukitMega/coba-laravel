@extends("layouts/main")

@section("container")
<h3 class="text-center mb-3">{{$title}}</h3>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
  <form action="/posts" method="GET">
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request("search")}}">
  <button class="btn btn-danger" type="submit">Search</button>
</div>
    </form>
  </div>
</div>

@if($Posts->count())
<div class="card mb-3">
  <img src="https://picsum.photos/1200/400?random&keywords=nature,water
" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/blog/{{ $Posts[0]->slug }}" class="text-decoration-none text-dark">{{$Posts[0]->title}}</a></h3>
    <p>By: <small class="text-body-secondary text-muted"><a href="/authors/{{$Posts[0]->user->name}}" class="text-decoration-none">
     {{ $Posts[0]->user->name }} </a> in <a href="/categories/{{$Posts[0]->category->slug}}" class="text-decoration-none">{{$Posts[0]->category->name}}</a> {{ $Posts[0]->created_at->diffForHumans() }} </small></p>
    <p class="card-text">{{$Posts[0]->excerpt}}</p>
    <a href="/blog/{{ $Posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
  </div>
</div>

<div class="container">
    <div class="row">
        @foreach($Posts->skip(1) as $p)
        <div class="col-md-4 mb-3">
        <div class="card">
            <div class="position-absolute px-3 py-2 " style="background-color : rgba(0,0,0,0.3)"><a href="/categories/{{$p->category->slug}}" class="text-white text-decoration-none">{{$p->category->name}}</a></div>
  <img src="https://picsum.photos/500/400
" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$p->title}}</h5>
    <p>By: <small class="text-body-secondary text-muted"><a href="/authors/{{$Posts[0]->user->name}}" class="text-decoration-none">
     {{ $p->user->name }} </a>{{ $p->created_at->diffForHumans() }} </small></p>
    <p class="card-text">{{$p->excerpt}}</p>
    <a href="/blog/{{ $p->slug }}" class="btn btn-primary">Read more</a>
  </div>
</div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No post found.</p>

@endif
@endsection