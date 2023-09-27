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
                                <a href="{{route('restaurants.create')}}">
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
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
