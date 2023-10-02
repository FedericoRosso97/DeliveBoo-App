<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Index myOrders</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/CSS/create.css" rel="stylesheet">
  </head>
  <body class="p-0 m-0 border-0 bd-example m-0 border-0">
  <nav class="navbar navbar-expand-lg mb-5">
  <div class="container-fluid p-2">
    <a class="navbar-brand text-warning link-underline" href="http://127.0.0.1:8000/home"><img class="logo_deliveboo" src="/img/logo_deliveboo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mb-sm-5">

        <li class="nav-item"> 
          <a class="nav-link active text-light" aria-current="page" href="http://127.0.0.1:8000/home">Torna alla dashboard</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 " type="search" placeholder="Search order" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div> 
  </div>
</nav>    
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Order Status</th>
    </tr>
  </thead>
  @foreach($orders as $order)
  <tbody>
    <tr>
      <th scope="row"> {{$order->id}}</th>
      <td>{{$order->name}}</td>
      <td>{{$order->address}}</td>
      <td>{{$order->phone_number}}</td>
      <td> {{$order->status_order}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
 








    <!-- End Example Code -->
  </body>
</html>