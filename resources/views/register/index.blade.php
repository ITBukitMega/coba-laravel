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
    <div class="col-lg-5">
    <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
  <form action="/register" method="post">
    @csrf
  <div class="form-floating">
      <input type="text" name = "name"class="form-control rounded-top @error("name") is-invalid @enderror" id="name" placeholder="Name" required value="{{old("name")}}">
      <label for="name">Name</label>
      @error("name")
        <div class="invalid-feedback">
        {{ $message }}
        </div>
    @enderror
    </div>

    <div class="form-floating">
      <input type="email" name = "email"class="form-control @error("email") is-invalid @enderror" id="email" placeholder="Email" required value="{{old("email")}}">
      <label for="email">Email address</label>
      @error("email")
        <div class="invalid-feedback">
        {{ $message }}
        </div>
    @enderror
    </div>
    <div class="form-floating">
      <input type="password" name = "password" class="form-control rounded-bottom @error("password") is-invalid @enderror" id="password" placeholder="Password" required">
      <label for="password">Password</label>
      @error("password")
        <div class="invalid-feedback">
        {{ $message }}
        </div>
    @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
  </form>
  <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
</main>
    </div>
</div>
    



    
  </body>
</html>

@endsection