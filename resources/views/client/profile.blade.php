<ul>
    @foreach($client_promo as $promo)
        <li>{{ $promo->name }}</li>
    @endforeach
</ul>
<ul>
    @foreach($client_product as $product)
        <li>{{ $product->name }}</li>
    @endforeach
</ul>
<ul>
    @foreach($client_equipment as $equipment)
        <li>{{ $equipment->name }}</li>
    @endforeach
</ul>

<p>Pagos: ${{ $payment }}</p>
<p>Deuda: ${{ $debt }}</p>

@if($price_ice == 0)
    <p>El cliete no consume hielo</p>
@else
    <p>Precio hielo: ${{ $price_ice }}</p>
@endif

@if($price_water == 0)
    <p>El cliete no consume agua</p>
@else
    <p>Precio agua: ${{ $price_water }}</p>
@endif

<p>Puntos de promociones: {{ $points_promo }}</p>
<p>Puntos de compras: {{ $purchase_point }}</p>
<p>Puntos disponibles: {{ $purchase_point - $points_promo }}</p>