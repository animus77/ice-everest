@extends('layouts.layout')
@section('content')
<article class="mx-auto max-w-xl">
    <x-card size="m-2">
        <x-slot name="title">Consumo de cliente</x-slot>
        <div class="">
            <div class="p-2">
                <p>Nombre: <strong>{{ $client->name }}</strong></p>
                <p>Deuda actual: <strong>${{ $balance }}</strong></p>
                @if( $water_price == 0)
                    <p>No consume agua</p>
                @else
                    <p>Precio agua: {{ $water_price }}</p>
                @endif
                @if( $ice_price == 0)
                    <p>No consume hielo</p>
                @else
                    <p>Precio hielo: {{ $ice_price }}</p>
                @endif
                <p>Consumo agua: {{ $water_amount }} </p>
                <p>Consumo agua: {{ $ice_amount }} </p>
            </div>
            @can('promotions')
            <div class="p-2">
                <p>Consumo mensual:</p>
                <ol class="flex flex-wrap">
                    @foreach($client_purchases as $purchase)
                        <li class="m-2 p-1 bg-blue-400 shadow-md">{{ $loop->iteration }} - <strong>{{ $purchase }};</strong></li>
                    @endforeach
                </ol>
            </div>
            @endcan
        </div>
    </x-card>
    <section class="bg-gray-200 m-2 overflow-x-auto overflow-y-auto h-80">
        <table class="mx-auto">
            <thead>
                <tr class="border-b-2 border-blue-400">
                    <th class="text-center text-sm p-1">Fecha</th>
                    <th class="text-center text-sm p-1">Producto</th>
                    <th class="text-center text-sm p-1">Cantidad</th>
                    <th class="text-center text-sm p-1">Precio</th>
                    <th class="text-center text-sm p-1">Pagos</th>
                    <th class="text-center text-sm p-1">Deudas</th>
                    @can('promotions')
                    <th class="text-center text-sm p-1">Observaciones</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach($purchases as $purchase)
                    @include('client.table')
                @endforeach
            </tbody>
        </table>
    </section>
</article>
@endsection