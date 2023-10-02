<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Modifica piatto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/mystye.css">
    </head>
    <body>    <!--NAVBAR -->
        <div class="upper-header">
            <a href="http://localhost:5174/">
                <img src="/img/logo_deliveboo.png" alt="DeliveBoo brand image">
            </a>
            <a href="{{ route('plates.destroy', $plate) }}">
                Piatti
            </a>
            <a href="http://127.0.0.1:8000/home" class="me-5">
                Dashboard
            </a>
        </div>    
        <div class="lower-header mb-5">
            <div class="searchBar">
                <div class="choose-box">
                    <h1>
                        Modifica piatto
                    </h1>
                </div>
            </div>
        </div>    <!--
        ---------------------------------------------------------------------             
    -->
        <div class="container mt-5">
            <div class="row">
                <div>
                    <div class="type-restaurant-title">
                    </div>
                    <div class="restourant-types">
                    </div>
                </div>
            </div>        <!--
        -------------------------------------------------------
    --> <div class="col-8 mx-auto mb-5">
            <form action="{{ route ('plates.update', $plate)}}" method='POST' enctype="multipart/form-data">
                @csrf            
                @method('PUT')
                
                
                <!--NOME PIATTO-->
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror       
                <div class="mb-5 mt-5">
                    <label for="name" class="form-label">Nome del piatto</label>
                    <input type="text" class="form-control" id="name" name='name' placeholder="Insert the name of the plate" value="{{ old( 'name' , $plate->name) }}">
                </div>    
                            <!--DESCRIZIONE PIATTO -->
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror                <div class="mb-5">
                    <label for="description" class="form-label">Descrizione del piatto</label>
                    <input type="text" class="form-control" id="description" name='description' value="{{ old( 'description' , $plate->description) }}">
                </div>        
                        <!--PREZZO PIATTO -->
                @error('plate_price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror                
                <div class="mb-5">
                    <label for="plate_price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="plate_price" placeholder="Inserisci il prezzo del tuo piatto" name="plate_price" >
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
                        Modifica
                    </button>
                    <button type="reset" class="btn my_btn-g">
                        Reset
                    </button>
                </div>
                </form>
            </div>        

    </body>
</html>