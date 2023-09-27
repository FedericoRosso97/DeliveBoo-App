@extends('layouts.app')

@section('content')
<div class="container" id="posts-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="title" class="form-label">
                        Nome Ristorante
                    </label>
                    <input type="text" class="form-control" id="name" placeholder="Insert your restaurant's name" name="name"  value="{{ old('name', '') }}">
                </div>

                @error('VAT_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="VAT_number" class="form-label">
                        Partita Iva
                    </label>
                    <input type="text" class="form-control" id="VAT_number" placeholder="Partita Iva" name="VAT_number"  value="{{ old('VAT_number', '') }}">
                </div>
              
                @error('typology_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="typology_id" class="form-label">
                        Tipologia
                    </label>
                    <select class='form-select' name="typology_id" id="typology_id">
                        @foreach ($typologies as $typology)
                            <option value="{{ $typology->id }}" {{ old('typology_id') == $typology->id ? 'selected' : '' }}>
                                {{ $typology->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="address" class="form-label">
                        Address
                    </label>
                    <input type="text" class="form-control" id="address" rows="7" name="address">{{ old('address', '') }}</input>
                </div>

                <div class="mb-3">
                    <button type="submit" class="me-3">
                       Registra il tuo ristorante
                    </button>
                    <button type="reset">
                        Reset
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection