@extends("layouts/main")

@section("container")
<h1>Halaman About</h1>
    <h3> {{ $nama }} </h3>
    <h5> {{ $email }} </h5>
    <img src="img/{{$image}}" alt="Image Coding" class="img-thumbnail rounded-circle" width="250">
@endsection
