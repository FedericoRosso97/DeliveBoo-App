<ul>
    @foreach ($orders as $order)
    <li>
        <h2>
            Order made by: <em>{{$order->name}}</em>
        </h2>
        <h3>
            Address: {{$order->address}}
        </h3>
        <h4>
            Phone Number: {{$order->phone_number}}
        </h4>
        <p>
            Order status: {{$order->status_order}}
        </p>
    </li>
    @endforeach
</ul>