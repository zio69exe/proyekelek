    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #594545">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Zio-Vani</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts') }}">Postingan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profile') }}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users') }}">Users</a>
        </li>
      </ul>
    </div>
        <div class="d-flex">
          @if(!Auth::check())
            <a href="{{route('signup')}}" class="btn btn-light">Signup</a>
            <a href="{{route('signin')}}" class="btn btn-light mx-2">Signin</a>
            @else
              <a href="{{route('logout')}}" class="btn btn-light">Logout</a>
          @endif
        </div>
  </div>
</nav>
    <!-- navbar end -->