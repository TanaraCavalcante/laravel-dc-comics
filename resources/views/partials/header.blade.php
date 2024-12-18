
<header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid gap-3">
          <img src="{{ asset('images/newheros.png') }}" alt="Bootstrap" width="80" >
          <a class="navbar-brand" href="#">Hero-movies</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link @if (Route::is('pages.home')) active @endif" aria-current="page" href="{{ route("pages.home") }}">
                    Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if (Route::is('movies.index')) active @endif" aria-current="page" href="{{ route("movies.index") }}">
                    Movies
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if (Route::is('movies.create')) active @endif" href="{{ route("movies.create") }}">Insert new movie</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
