<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-0 m-0 border-0 bd-example m-0 border-0">
    <!-- Example Code -->

    <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-warning link-underline" href="#"><img src="" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-warning" href="#">Add a new food</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="#">Torna alla dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="#">Vai a restaurant</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    @foreach ($plates as $plate)
    
    <div class="card mb-5 mt-5 m-auto" style="width: 18rem">
    <img src="{{$plate->image}}" alt="{{$plate->name}}">
  <div class="card-body">
    <div class="d-flex justify-content-between">
    <h5 class="card-title fw-bold">{{ $plate->name }}</h5>
    <span class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="#">Edit Food</a></li>
            <li><a class="dropdown-item text-danger" href="#">Delete Food</a></li>
          </ul>
    </span>
    </div>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><span class="fw-bold">Id: </span> {{ $plate->id }} </li>
    <li class="list-group-item"><span class="fw-bold">Price: </span> {{$plate->plate_price }}</li>
    <li class="list-group-item"><span class="fw-bold">Description: </span></h3> {{ $plate->description }}</li>
  </ul>
  <div class="card-body m-auto">
    <a href="{{ route ('plates.show', $plate->id)}}" class="card-link ">
      show information
  </a>
  </div>
</div>

  
@endforeach



    <!-- End Example Code -->
  </body>
</html>