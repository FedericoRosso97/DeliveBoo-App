@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header my-dashboard-header text-light">{{ __('Dashboard') }}</div>

                <div class="card-body d-flex">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav class="my-dashboard-nav">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">
                                    Il mio ristorante
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('plates.index') }}">
                                    Il mio menù
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('orders.index') }}">
                                    I miei ordini
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    Le mie statistiche
                                </a>
                            </li>
                            
                            <li>
                                <a href="http://localhost:5174/">
                                    Home
                                </a>
                            </li>          
                        </ul>
                    </nav>
                    
                    <section class="my-dashboard-content ms-5">
                        <h2 class="mb-4">
                            Il mio ristorante:
                        </h2>
                        <p>
                            Nome:
                        </p>
                        <p>
                            Indirizzo:
                        </p>
                        <p>
                            Email:
                        </p>
                        <p>
                            Orario di apertura:
                        </p>
                        <p>
                            immagine:
                        </p>
                        <p>
                            Numero di telefono:
                        </p>
                        <div class="d-flex">
                            <button class="btn btn-primary me-3">
                                Modifica i tuoi dati
                            </button>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
