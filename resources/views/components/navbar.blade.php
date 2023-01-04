<nav class="navbar navbar-expand-lg nav-bar">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="/logo/The Aulab Post-logos_transparent.png" alt="" height="70vh">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            @auth
            <a class="nav-link active" aria-current="page" href="{{route('article.create')}}">Inserisci articolo</a>          
            {{-- @else
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Inserisci articolo</a> --}}
            @endauth
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('article.index')}}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('careers')}}">Lavora con noi</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="">Profilo</a></li>
              @if(Auth::user()->is_admin)
              <li>
                <a class="dropdown-item" href="{{route('admin.dashboard')}}">Gestione utenti</a>
              </li>
              @endif
              @if(Auth::user()->is_revisor)
              <li>
                <a class="dropdown-item" href="{{route('revisor.dashboard')}}">Revisione articoli</a>
              </li>
              @endif
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
              <form method="POST" action="{{route('logout')}}" id="form-logout">
                @csrf
              </form>
            </ul>
          </li>
          @endauth
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="nabvarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Accedi
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            </ul>
          </li>
          @endguest
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>