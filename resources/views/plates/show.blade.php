<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/CSS/create.css" rel="stylesheet">
  </head>
  <body class="p-0 m-0 border-0 bd-example m-0 border-0">

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-warning link-underline" href="#"><img  class="logo_deliveboo" src="/img/logo_deliveboo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Torna alla dashboard</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    <div class="card m-auto mt-5" style="width: 18rem;">
      <img src="{{$plate->image}}" alt="{{$plate->name}}">
      <div class="card-body">
        <h5 class="card-title">{{ $plate->name }}</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><span class="fw-bold">ID: </span>{{ $plate->id }}</li>
        <li class="list-group-item"><span class="fw-bold">Visibility: </span> {{$plate->visibility}} </li>
        <li class="list-group-item"><span class="fw-bold">Price: </span> {{ $plate->plate_price }}</li>
        <li class="list-group-item">
          <p class="card-text">{{ $plate->description }}</p>
        </li>
      </ul>
      <div class="card-body d-flex justify-content-around">
        <button type="button" class="btn btn-primary"><a href="#" class="card-link text-warning">Edit</a></button>
        <button type="button" class="btn btn-danger ">Delete</button>
      </div>
    </div>
    
    <!-- End Example Code -->
  </body>
</html>