<p>Venta durante el mes</p>
<ol>
    @foreach($people as $person)
        <li>{{ $person }}</li>
    @endforeach
</ol>
<ol>
    @foreach($avg_consumptions as $consumptions)
        <li>{{ $consumptions }}</li>
    @endforeach
</ol>
<ol>
    @foreach($quantities as $quantity)
        <li>{{ $quantity }}</li>
    @endforeach
</ol>

<p>diferenciar los clientes que consumen agua y/o hielo</p>
<p>Se recomienda visitar los siguientes clientes:</p>
<table>
    <thead>
        <tr>
            <th rowspan="2">Id</th>
            <th rowspan="2">Ref</th>
            <th colspan="31">Dias</th>
        </tr>
        <tr>
            <th colspan="31">Cantidad</th>
        </tr>
    </thead>
</table>
<ol>
    @foreach($sells as $sell)
        <li>{{ $sell->amount }}</li>
    @endforeach
</ol>


