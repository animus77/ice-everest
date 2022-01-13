@extends('layouts.layout')
@section('content')
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
<x-card size="mx-auto max-w-xl p-2 m-2">
    <x-slot name="title">Ingrese Fecha</x-slot>
    <form action="{{ route('sells.index') }}" method="GET" class="p-2">
        <input class="bg-gray-400 p-1 outline-none" type="date" name="date">
    
        <x-button value="consultar"></x-button>
    </form>
</x-card>
<section class="mx-auto max-w-xl p-2 m-2">
    @for($i = 0; $i <= $group; $i++)
        <button class="accordion">Viaje: {{ $i }}</button>
        <div class="panel overflow-x-auto">
            <table class="">
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
    <div class="p-2 m-2  mx-auto ">
    </div>
</section>

<section class="flex justify-center flex-wrap">
    <div class="p-2 bg-gray-200 m-2 shadow-lg">
        <p class="text-xl text-center">Piezas</p>
        <ul>
            <li>Viaje 0: <strong>{{ $ice_pieces }}</strong></li>
            @foreach($pieces_trip as $piece)
            <li>Viaje {{ $loop->iteration }}: <strong>{{ $piece }}</strong></li>
            @endforeach
        </ul>
    </div>

    <div class="p-2 bg-gray-200 m-2 shadow-lg">
        <p class="text-xl text-center">Efectivo</p>
        <ul>
            <li>Viaje 0: <strong>${{ $ice_payment }}</strong></li>
            @foreach($paid_trip as $paid)
            <li>Viaje {{ $loop->iteration }}: <strong>${{ $paid }}</strong></li>
            @endforeach
        </ul>
    </div>
    <div>
    </div>
</section>

<section class="m-2">
    <div class="bg-gray-200 p-2 m-2 max-w-xl mx-auto">
        <p class="text-xl text-center">Pagos del dia</p>
        <ul>
            @forelse($day_payments as $payment)
                <li class="p-1">{{ $payment->user->ref }} - <strong>${{ $payment->paid_amount }}</strong></li>
            @empty
                <p>no se han recibido pagos</p>
            @endforelse
        </ul>

    </div>
</section>
<section class="m-2">
    <div class="bg-gray-200 p-2 m-2 max-w-xl mx-auto">
        <p class="text-xl text-center">Venta del dia</p>
        <table class="mx-auto">
            <tbody>
                <tr>
                    <td class="px-2">Piezas de hielo: <strong>{{ $ice_pieces }}</strong></td>
                    <td class="px-2">Efectivo: <strong>${{ $ice_payment }}</strong></td>
                </tr>
                <tr>
                    <td class="px-2">Piezas de agua: <strong>{{ $water_pieces }}</strong></td>
                    <td class="px-2">Efectivo: <strong>${{ $water_payment }}</strong></td>
                </tr>
                <tr>
                    <td class="px-2">Pagos del dia: </td>
                    <td class="px-2">Efectivo: <strong>${{ $total_payment }}</strong></td>
                </tr>
                <tr class="border-t border-blue-600">
                    <td class="px-2">Total</td>
                    <td class="px-2">Efectivo: <strong>${{ $ice_payment + $water_payment + $total_payment }}</strong></td>
                </tr>
            </tbody>
        </table>

    </div>
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
@endsection