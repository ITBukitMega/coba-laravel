<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Bryan Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{($title === "Home" ? "active" : "")}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "About" ? "active" : "")}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "All Post" || $title === "Single Post" || str_starts_with($title, 'Post by Author :') ? "active" : "")}}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "Post Categories" ? "active" : "")}}" href="/categories">Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>