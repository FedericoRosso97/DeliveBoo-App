<!-- @extends('layouts.app') -->

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

    <title>Plate's list</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/CSS/create.css" rel="stylesheet">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg mb-5">
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
      </div>
    </nav> 




  <h1 class="text-center">
    Your Plate's List
  </h1>
  <div class="plate-container d-flex row">
  @foreach ($plates as $plate)

    <div class="plate-card col-12 col-md-6 col-lg-4 ">
      <div class="img-box">
        <img src="{{$plate->image}}" alt="{{$plate->name}}">
      </div>
      <div class="plate-content">
        <h2>
          {{ $plate->name }}
        </h2>
        <h4>
          ID: {{ $plate->id }}
        </h4>
        <h4>
          {{$plate->plate_price }}
        </h4>
        <p>
          <strong>
          Ingridients:
          </strong>  {{$plate->description }}
        </p>
        <a href="{{ route('plates.show', $plate) }}"      class="btn btn-sm btn-primary">
            View
        </a>
      </div>
      
    </div>
    @endforeach

  </div>




</body>

</html>