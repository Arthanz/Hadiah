<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Arthanz's Game Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          @can('isAdmin')
          <li class="nav-item">
            <a class="nav-link" href="/form">Add Games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/categories">Add Categories</a>
          </li>
          @endcan
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Arthanz's Game Store</a>
          </li>
        </ul>
        <form class="d-flex" type="get" action="/search">
          <input class="form-control me-2" type="search" name="query" placeholder="Search Games" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
