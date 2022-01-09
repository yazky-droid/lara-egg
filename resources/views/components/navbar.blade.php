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
            {{-- @if (!Auth::check())  // cara cek user udah login atau belum, makanya pake auth check kalo ada token bisa karena udah login, tapi bisa juga pake @guest tampilin login register navbar @else tampilin nama user yang login @endguest  --}}
            @guest

            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="{{ route('logout') }}" method="post">
                    <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </ul>
            </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
