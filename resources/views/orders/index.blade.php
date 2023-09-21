<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>myOrders</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-0 m-0 border-0 bd-example m-0 border-0">
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-warning link-underline" href="#"><img src="" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="#">Torna alla dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-warning link-underline" aria-current="page" href="#">Visualizza le statistiche</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 " type="search" placeholder="Search order" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  
    
    <ul>
      @foreach ($orders as $order)
      <div class="card m-auto mt-5" style="width: 18rem;">
        <div class="card-header">
          <h2>
            Order made by:
          </h2>
          <em class="fs-3">{{$order->name}}</em>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            
          <span class="fw-bold"> Address:</span> {{$order->address}}
          
          </li>
          <li class="list-group-item">
            <span class="fw-bold"> Phone number:</span> {{$order->phone_number}}
          </li>
          <li class="list-group-item">
            <p>
             <span class="fw-bold"> Order status:</span> {{$order->status_order}}
          </p>
          </li>
        </ul>
      </div>
      @endforeach
  </ul>
    
    <!-- End Example Code -->
  </body>
</html>