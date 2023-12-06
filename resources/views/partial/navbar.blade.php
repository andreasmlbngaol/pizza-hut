<nav class="navbar navbar-expand-lg bg-light " style="background-image: url({{ asset('img/bg-kertas.jpg') }})">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('img/logo-ph.png') }}" alt="" style="max-width: 60px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fw-semibold {{ $active === 'Outlets' ? 'active' : '' }}" href="/outlets">Outlets</a>
          </li>
          @if (auth()->user())
          <li class="nav-item">
            <a class="nav-link fw-semibold {{ $active === 'Employees' ? 'active' : '' }} {{ $active === 'Login' ? 'visually-hidden' : '' }}" href="/employees">Employees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold {{ $active === 'Recipes' ? 'active' : '' }} {{ $active === 'Login' ? 'visually-hidden' : '' }}" href="/recipes">Recipes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold {{ $active === 'Sellings' ? 'active' : '' }} {{ $active === 'Login' ? 'visually-hidden' : '' }}" href="/sellings">Selling Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold {{ $active === 'Surveys' ? 'active' : '' }} {{ $active === 'Login' ? 'visually-hidden' : '' }}" href="/surveys">Survey Report</a>
          </li>
          @endif
        </ul>
        @if (auth()->user())
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="btn fw-semibold {{ $active === 'Login' ? 'visually-hidden' : '' }}">Logout</button>
        </form>
        @else
          <a href="/login" class="btn fw-semibold {{ $active === 'Login' ? 'visually-hidden' : '' }}">Login</a>
        @endif

      </div>
    </div>
</nav>