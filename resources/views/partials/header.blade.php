<nav class="navbar navbar-dark bg-dark px-3">
  <a class="navbar-brand" href="#">Student Directory</a>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn-outline-light btn-sm">Logout</button>
  </form>
</nav>
