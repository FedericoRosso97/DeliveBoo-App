@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header my-dashboard-header text-light">{{ __('Dashboard') }}</div>

                <div class="card-body d-flex">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  -->

                    <div class="my-dashboard-card">

                        <div class="box-1">
                            <div class="buttn btn-2">
                                <span>
                                    <a class="dash-link" href="{{route('restaurants.create')}}">
                                        Il mio ristorante
                                    </a>
                                </span>
                            </div>
                        </div>

                        <div class="box-1">
                            <div class="buttn btn-2">
                                <span>
                                    <a class="dash-link" href="{{ route('plates.index') }}">
                                        Il mio menù
                                    </a>

                                </span>
                            </div>
                        </div>

                        <div class="box-1">
                            <div class="buttn btn-2">
                                <span>
                                    <a class="dash-link" href="{{ route('orders.index') }}">
                                        I miei ordini
                                    </a>
                                </span>
                            </div>
                        </div>

                        <div class="box-1">
                            <div class="buttn btn-2">
                                <span>
                                    <a class="dash-link" href="http://localhost:5174/">
                                        Home
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    
</div>
                <!-- </div>
            </div>
        </div>
    </div>
</div>
@endsection

