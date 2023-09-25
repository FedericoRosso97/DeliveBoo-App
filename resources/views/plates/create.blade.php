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
    <a class="navbar-brand text-warning link-underline" href="/home"><img class="logo_deliveboo" src="/img/logo_deliveboo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="#">Torna alla dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page"  href="/plates">Torna a myFoods</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container_create">
    <form action="{{ route ('plates.store')}}" method='POST'>
      @csrf
      <div class="mb-3">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name='name'>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name='description'>
      </div>
      <div class="mb-3">
        <label for="plate_price" class="form-label">Price</label>
        <input type="text" class="form-control" id="plate_price" name='plate_price'>
      </div>
      <div class="mb-5">
        <label for="image" class="form-label">
            Image
        </label>
        <input type="file" name="image" id="image" class="form-control" placeholder="Upload your image" value="{{ old('image', '') }}">
    </div>

    <div class="radio">
        Available?
        <label><input name="visibility" type="radio" value="0">  No </label>
        <label><input name="visibility" type="radio" value="1">  Yes</label>
    </div>

    
    <button type="submit" class="btn btn-primary">Create New Plate</button>
    <button type="reset" class="btn btn-warning">Reset</button>
    </form>
    </div>
  </body>
</html>