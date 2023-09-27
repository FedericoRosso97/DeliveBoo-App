<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crea nuovo piatto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/mystye.css">
</head><body>    <!--NAVBAR -->
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
    </div>    <div class="lower-header">
        <div class="searchBar">
            <div class="choose-box">
                <h1>
                    Crea un nuovo piatto
                </h1>
            </div>
        </div>
    </div>    <!--
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
        </div>        <!--
    -------------------------------------------------------
-->        <div class="col-8 mx-auto">
            <h1 class='text-center mb-5'>
                Create New Plate
            </h1>            <!--FORM  PER LA COMPILAZIONE DEL NUOVO PIATTO-->            <form action="{{ route ('plates.store')}}" method='POST' enctype="multipart/form-data">
                @csrf                <!--NOME PIATTO-->
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror                <div class="mb-5">
                    <label for="name" class="form-label">Nome del piatto</label>
                    <input type="text" class="form-control" id="name" placeholder="Inserisci il nome del tuo piatto" name="name" value="{{ old('name', 'Oops manca il nome del piatto') }}">
                </div>                <!--DESCRIZIONE PIATTO -->
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror                <div class="mb-5">
                    <label for="description" class="form-label">Descrizione del piatto</label>
                    <input type="text" class="form-control" id="description" placeholder="Inserisci la descrizione del tuo piatto" name="description" value="{{ old('description', 'Oops manca la descrizione del piatto') }}">
                </div>                <!--PREZZO PIATTO -->
                @error('plate_price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror                <div class="mb-5">
                    <label for="plate_price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="plate_price" placeholder="Inserisci il prezzo del tuo piatto" name="plate_price" value="{{ old('plate_price', 'Oops manca il prezzo del piatto') }}">
                </div>                <!--DOBBIAMO RICORDARCI TUTTI DI SETTARE DA PRIVATE A PUBLIC FILE ENV da guardare slide 85-->
                <div class="mb-5">
                    <label for="image" class="form-label">
                        Immagine del piatto
                    </label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Upload your image" value="{{ old('image', '') }}">
                </div>                <div class="radio mb-3">
                    Disponibile
                    <label class="ms-3 me-3">
                        <input name="visibility" type="radio" value="0">
                        si
                    </label>
                    <label>
                        <input name="visibility" type="radio" value="1">
                        no
                    </label>
                </div>                <div class="mb-5">
                    <button type="submit" class="btn my_btn-b me-3">
                        Crea
                    </button>
                    <button type="reset" class="btn my_btn-g">
                        Reset
                    </button>
                </div>
            </form>
        </div>        <script src="" async defer></script>
</body></html>