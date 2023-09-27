@extends('layouts.app')

@section('content')
<div class="container" id="posts-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <h4 class="card-header">
                    {{ $restaurant->name }}
                </h4>
                <h5 class="card-header"> ID: {{ $restaurant->id }}
                

                <div class="card-body">
                    <h5 class="card-title">
                        {{ $restaurant->address}}
                    </h5>
                    <p class="card-text">
                        {{ $restaurant->VAT_number }}
                    </p>
                    <a href="#" class="btn btn-sm btn-success">
                        Edit
                    </a>
                    <form class="d-inline-block" action="#" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-warning">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection