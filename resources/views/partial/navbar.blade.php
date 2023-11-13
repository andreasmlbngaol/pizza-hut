<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/outlets">Outlet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/employees">Employees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/recipes">Recipes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sellings">Selling Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/surveys">Survey Report</a>
          </li>
        </ul>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="dropdown-item"><i class="bi bi-suit-heart me-1"></i>Logout</button>
        </form>
      </div>
    </div>
</nav>