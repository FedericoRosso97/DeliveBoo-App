<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crea nuovo piatto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/mystye.css">
</head>

<body>

    <!--NAVBAR -->
    <div class="upper-header">
        <a href="http://localhost:5174/">
            <img src="/img/logo_deliveboo.png" alt="DeliveBoo brand image">
        </a>
        <a href="http://127.0.0.1:8000/plates/">
            Piatti
        </a>
        <a href="http://127.0.0.1:8000/home" class="me-5">
            Dashboard
        </a>
    </div>

    <div class="lower-header">
        <div class="searchBar">
            <div class="choose-box">
                <h1>
                    Crea nuovo piatto
                </h1>
            </div>
        </div>
    </div>

    <!--
    ---------------------------------------------------------------------              
-->
    <div class="container">
        <div class="row">
            <div>
                <div class="type-restaurant-title">
                </div>
                <div class="restourant-types">
                </div>
            </div>
        </div>

        <!--
    -------------------------------------------------------
-->

        <div class="col-8 mx-auto">
            <h1 class='text-center mb-5'>
                Create New Plate
            </h1>


            <!--FORM  PER LA COMPILAZIONE DEL NUOVO PIATTO-->

            <form action="{{ route ('plates.store')}}" method='POST' enctype="multipart/form-data">
                @csrf

                <!--NOME PIATTO-->
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-5">
                    <label for="name" class="form-label">Nome del piatto</label>
                    <input type="text" class="form-control" id="name" placeholder="Inserisci il nome del tuo piatto" name="name" value="{{ old('name', 'Oops manca il nome del piatto') }}">
                </div>

                <!--DESCRIZIONE PIATTO -->
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-5">
                    <label for="description" class="form-label">Descrizione del piatto</label>
                    <input type="text" class="form-control" id="description" placeholder="Inserisci la descrizione del tuo piatto" name="description" value="{{ old('description', 'Oops manca la descrizione del piatto') }}">
                </div>


                <!--PREZZO PIATTO -->
                @error('plate_price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-5">
                    <label for="plate_price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="plate_price" placeholder="Inserisci il prezzo del tuo piatto" name="plate_price" value="{{ old('plate_price', 'Oops manca il prezzo del piatto') }}">
                </div>

                <!--DOBBIAMO RICORDARCI TUTTI DI SETTARE DA PRIVATE A PUBLIC FILE ENV da guardare slide 85-->
                <div class="mb-5">
                    <label for="image" class="form-label">
                        Immagine del piatto
                    </label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Upload your image" value="{{ old('image', '') }}">
                </div>

                <div class="radio mb-3">
                    Disponibile
                    <label class="ms-3 me-3">
                        <input name="visibility" type="radio" value="0">
                        si
                    </label>
                    <label>
                        <input name="visibility" type="radio" value="1">
                        no
                    </label>
                </div>

                <div class="mb-5">
                    <button type="submit" class="btn my_btn-b me-3">
                        Crea
                    </button>
                    <button type="reset" class="btn my_btn-g">
                        Reset
                    </button>
                </div>
            </form>
        </div>

        <script src="" async defer></script>
</body>

>>>>>>> origin/Edit-branch
</html>