@extends('layouts.app')

@section('content')
<div class="container" id="posts-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <h4 class="card-header">
                    Restaurant's name: {{ $restaurant->name }}
                </h4>
                <h5 class="card-header"> ID: {{ $restaurant->id }}
                

                <div class="card-body">
                    <h5 class="card-title">
                        Your address: {{ $restaurant->address}}
                    </h5>
                    <p class="card-text">
                        Your VAT_Number: {{ $restaurant->VAT_number }}
                    </p>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-outline-warning mt-5">
                    <a href="http://127.0.0.1:8000/home">
                        Torna alla dashboard
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection