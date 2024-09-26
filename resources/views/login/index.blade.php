@extends("layouts.main")

@section("container")

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="text-center">

  <div class="row justify-content-center">
    <div class="col-md-4">
      @if(session()->has("success"))
      <div class="alert alert-success" role="alert">
    {{ session("success") }}
  </div>


      @endif
      @if(session()->has("loginError"))
      <div class="alert alert-danger" role="alert">
    {{ session("loginError") }}
  </div>
      @endif
    <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
  <form action="/login" method="post">
    @csrf
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error("email") is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old("email")}}">
      <label for="email">Email address</label>
      @error("email")
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  </form>
  <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small>
</main>
    </div>
</div>
    



    
  </body>
</html>

@endsection