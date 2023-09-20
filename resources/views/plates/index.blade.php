<ul>
    @foreach ($plates as $plate)
        <li class="project-element">
            <h3>
                {{ $plate->name }} ~~ {{ $plate->id }}
            </h3>
            <p>
                {{ $plate->description }}
            </p>
            <p>
                {{ $plate->plate_price }}
            </p>
            <button type="button">
                <a href="{{ route ('plates.show', $plate->id)}}">
                    show
                </a>
            </button>
        </li>
    @endforeach

</ul>