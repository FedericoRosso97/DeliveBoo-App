<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />

    <title>RIEPILOGO ORDINE</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/success.css">

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
                        <a class="text-light nav-link active " href="/plates/create">Crea piatto</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-light nav-link active" aria-current="page" href="#">Torna alla dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-light nav-link active" aria-current="page" href="#">Vai a restaurant</a>
                    </li>
                </ul>
            </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex  justify-content-center">
                <h1>
                    Riepilogo dei tuoi ordini:
                </h1>
            </div>

            

            <div class="col-12 d-flex  justify-content-center mt-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            Hai ordinato
                        </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="http://127.0.0.1:8000/payment" class="btn my_btn-b me-3 d-flex  justify-content-center">
                            Procedi al pagamento
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>