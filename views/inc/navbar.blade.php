<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="{{url('')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('create')}}">Product Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('details')}}">Product Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('list')}}">Product List</a>
      </li>
    </ul>
  </div>
</nav>