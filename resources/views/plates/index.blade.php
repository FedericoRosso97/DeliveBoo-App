<ul>
    @forelse ($plates as $plate)
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
    @empty
        <li>
            <h2>
                No projects are available
            </h2>
        </li>
    @endforelse
</ul>