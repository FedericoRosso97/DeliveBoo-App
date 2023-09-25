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
    <title>Index myFoods</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/CSS/create.css" rel="stylesheet">
  </head>
  <body class="p-0 m-0 border-0 bd-example m-0 border-0">


    <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid p-2">
    <a class="navbar-brand link-underline" href="/home"><img class="logo_deliveboo" src="/img/logo_deliveboo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="text-light nav-link active " href="/plates/create">Add a new food</a>
        </li>
        <li class="nav-item">
          <a class="text-light nav-link active" aria-current="page" href="#">Torna alla dashboard</a>
        </li>
        <li class="nav-item">
          <a class="text-light nav-link active" aria-current="page" href="#">Vai a restaurant</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 " type="search" placeholder="Search food" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>



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
            <li><a class="dropdown-item " href="{{ route ('plates.edit', $plate->id)}}">Edit Food</a></li>
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


</body>

</html>