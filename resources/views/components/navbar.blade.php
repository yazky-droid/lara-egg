<nav class="navbar navbar-expand-lg navbar-light bg-light  border-bottom">
    <div class="container">
      <a class="navbar-brand" href="#">Laravel 8</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @foreach ( $navbar as $name => $url )
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ $url }}">{{ $name }}</a>
          </li>
          @endforeach
        </ul>

        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
