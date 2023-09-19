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
        </li>
    @endforeach

</ul>