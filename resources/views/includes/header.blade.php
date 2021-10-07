<header class="mb-4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{ request()->routeIs('home') ? '#' : route('home') }}">MyMovies</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ request()->routeIs('home') ? '#' : route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('movies.index') ? 'active' : '' }}" href="{{ request()->routeIs('movies.index') ? '#' : route('movies.index') }}">Movies List</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>