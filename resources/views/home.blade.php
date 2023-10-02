@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
        <div class="col-md-8">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="my-dashboard">

                        <div class="box">
                            <div class="btn btn-one">
                                <span>
                                    <a href="{{route('restaurants.create')}}">
                                        Il mio ristorante
                                    </a>
                                </span>
                            </div>
                            <div class="btn btn-one">
                                <span>
                                    <a href="{{ route('plates.index') }}">
                                        Il mio menù
                                    </a>
                                </span>
                            </div>
                            <div class="btn btn-one">
                                <span>
                                    <a href="{{ route('orders.index') }}">
                                        I miei ordini
                                    </a>
                                </span>
                            </div>
                            <div class="btn btn-one">
                                <span>
                                    <a href="http://localhost:5174/">
                                        Home
                                    </a>
                                </span>
                            </div>
                        </div>




                        





                    </div>
                    
                </div>

    </div>
</div>
@endsection
