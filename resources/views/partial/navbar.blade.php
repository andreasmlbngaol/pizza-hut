<nav class="navbar navbar-expand-lg bg-danger mb-3">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('favicon.ico') }}" alt="" style="max-width: 40px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ $active === 'Outlets' ? 'active' : '' }}" href="/outlets">Outlets</a>
          </li>
          @if (auth()->user())
          <li class="nav-item">
            <a class="nav-link {{ $active === 'Employees' ? 'active' : '' }} {{ $active === 'Login' ? 'visually-hidden' : '' }}" href="/employees">Employees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'Recipes' ? 'active' : '' }} {{ $active === 'Login' ? 'visually-hidden' : '' }}" href="/recipes">Recipes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'Sellings' ? 'active' : '' }} {{ $active === 'Login' ? 'visually-hidden' : '' }}" href="/sellings">Selling Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'Surveys' ? 'active' : '' }} {{ $active === 'Login' ? 'visually-hidden' : '' }}" href="/surveys">Survey Report</a>
          </li>
          @endif
        </ul>
        @if (auth()->user())
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="btn {{ $active === 'Login' ? 'visually-hidden' : '' }}">Logout</button>
        </form>
        @else
          <a href="/login" class="btn {{ $active === 'Login' ? 'visually-hidden' : '' }}">Login</a>
        @endif

      </div>
    </div>
</nav>