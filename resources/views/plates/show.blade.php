<div class="col-md-8">
    <h1>
        Plate: {{ $plate->id }} -- {{ $plate->name }}
    </h1>
    <h2>
        Recipee: {{ $plate->description }}
    </h2>

    <h3>
        Price: {{ $plate->plate_price }}
    </h3>
    <img src="{{$plate->image}}" alt="{{$plate->name}}">
    <p>
        {{$plate->visibility}} <!--SE E' 0 ALLORA NON E' DISPONIBILE, ALTRIMENTI E' DISPONIBILE-->
    </p>

</div>