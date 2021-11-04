<style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.panel {
    padding: 0 18px;
    background-color: white;
    display: none;
    overflow: hidden;
}
</style>

<form action="{{ route('sells.index') }}" method="get">
    <input type="date" name="date">

    <input type="submit" value="Consultar">
</form>

<section>
    @for($i = 0; $i <= $group; $i++)
        <button class="accordion">Viaje: {{ $i }}</button>
        <div class="panel">
            <table>
                <tbody>
                    @foreach($sells as $sell)
                        @if($sell->trip == $i)
                            @include('sells.table')
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @endfor
</section>
<section>
    <div>
        <p>Piezas vendidas</p>
        <ul>
            <li>Viaje 0:{{ $ice_pieces }}</li>
            @foreach($pieces_trip as $piece)
            <li>Viaje {{ $loop->iteration }}: {{ $piece }}</li>
            @endforeach
        </ul>
    </div>
    <div>
        <p>Efectivo</p>
        <ul>
            <li>Viaje 0: ${{ $ice_payment }}</li>
            @foreach($paid_trip as $paid)
            <li>Viaje {{ $loop->iteration }}: ${{ $paid }}</li>
            @endforeach
        </ul>
    </div>
    <div>
    </div>
</section>
<section>
    <p>Pagos del dia</p>
    <ul>
        @forelse($day_payments as $payment)
            <li>{{ $payment->user->ref }} - ${{ $payment->paid_amount }}</li>
        @empty
            <p>no se han recibido pagos</p>
        @endforelse
    </ul>
</section>
<section>
    <p>Venta del dia</p>
    <table>
        <tbody>
            <tr>
                <td>Piezas de hielo: {{ $ice_pieces }}</td>
                <td>Efectivo: ${{ $ice_payment }}</td>
            </tr>
            <tr>
                <td>Piezas de agua: {{ $water_pieces }}</td>
                <td>Efectivo: ${{ $water_payment }}</td>
            </tr>
            <tr>
                <td>Pagos del dia: </td>
                <td>Efectivo: ${{ $total_payment }}</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Efectivo: ${{ $ice_payment + $water_payment + $total_payment }}</td>
            </tr>
        </tbody>
    </table>
</section>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    } 
</script>