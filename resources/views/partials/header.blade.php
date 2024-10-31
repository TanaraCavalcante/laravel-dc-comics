
<header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid gap-3">
          <img src="{{ asset('images/newheros.png') }}" alt="Bootstrap" width="70" height="50">
          <a class="navbar-brand" href="#">Hero-movies</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route("movies.index") }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("movies.create") }}">Insert new movie</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
