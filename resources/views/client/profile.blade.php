@extends('layouts.layout')
@section('content')
<article class="grid md:grid-cols-3">
    <x-card size="m-4">
        <x-slot name="title">{{ $client->name }}</x-slot>
        <div>
            <ul>
                <li class="p-1">Referencia: <strong>{{ $client->ref }}</strong></li>
                <li class="p-1">Direccion: <strong>{{ $client->address }}</strong></li>
                <li class="p-1">Consumo:
                    @foreach($client_product as $product)
                        <span class="bg-blue-400 rounded-lg p-1 m-1 text-sm">{{ $product->name }}</span>
                    @endforeach
                </li>
                <li class="p-1">Equipos:
                    @foreach($client_equipment as $equipment)
                        <span class="bg-blue-400 rounded-lg p-1 m-1 text-sm">{{ $equipment->name }}</span>
                    @endforeach
                </li>
                @if($price_ice == 0)
                    <li class="p-1">Precio hielo: <strong>No consume hielo</strong></li>
                @else
                    <li class="p-1">Precio hielo: <strong>${{ $price_ice }}</strong></li>
                @endif
    
                @if($price_water == 0)
                    <li class="p-1">Precio agua: <strong>No consume agua</strong></li>
                @else
                    <li class="p-1">Precio agua: <strong>${{ $price_water }}</strong></li>
                @endif
                @if($client->url_document)
                <li>
                    <a href="{{ $client->url_document }}" class="m-2 bg-blue-400 py-1 px-2 mt-2 font-semibold hover:bg-blue-300 rounded shadow">Ver carta Compromiso</a>
                </li>
                @endif
            </ul>
        </div>
        <div class="flex justify-center">
            <div class="p-2">
                <p class="px-1 text-center font-semibold text-xl">${{ $balance }}</p>
                <p class="px-1 text-center text-gray-600">Saldo actual</p>
            </div>
            <div class="p-2">
                <p class="px-1 text-center font-semibold text-xl">{{ $points }}</p>
                <p class="px-1 text-center text-gray-600">Puntos</p>
            </div>
        </div>
    </x-card>
    
    <x-card size="m-4">
        <x-slot name="title">Promociones recibidas</x-slot>
        <div class="bg-gray-200 flex flex-wrap justify-center p-2">
            @forelse($client_promo as $promotion)
                <div class="p-2">
                    <img src="{{ $promotion->url }}" class="w-52 h-52 rounded-full bg-blue-300">
                    <p class="text-center">{{ $promotion->title }}</p>
                </div>
            @empty
                <div class="p-2">
                    <p>Por el momento no ha recibido ninguna promocion</p>
                </div>
            @endforelse
        </div>
        <div></div>
    </x-card>

    <x-card size="m-4">
        <x-slot name="title">Promociones disponibles</x-slot>
            @if($balance > 0 && $points > 0)
                <p class="p-2">Para ver promociones disponibles, necesita liquidar su saldo vencido</p>
            @elseif($balance > 0 && $points == 0)
                <p class="p-2">Usted tiene un saldo vencido</p>
            @elseif($balance == 0 && $points > 0)
                <p class="p-2">Gracias por sus compras, ahora puede obtener alguna de las siguientes promociones:</p>
                <div class="flex flex-wrap justify-center">
                    @foreach($promotions as $promotion)
                        @if($points >= $promotion->point_price)
                            <div class="p-2 m-2">
                                <img src="{{ $promotion->url }}" alt="" class="w-32 ">
                                <p class="text-center p-1">{{ $promotion->name }}</p>
                                <p class="text-center">Puntos: <strong>{{ $promotion->point_price }}</strong></p>
                                <p class="text-center"><a href="https://wa.me/+5219191463299" target="_blank" class="m-2 bg-blue-400 py-1 px-2 mt-2 font-semibold hover:bg-blue-300 rounded shadow">Solicitar</a></p>
                            </div>
                        @else
                            <p class="p-2">sus puntos no son suficientes para esta promocion</p>
                        @endif
                    @endforeach
                </div>
            @elseif($balance == 0 && $points == 0)
                <p class="p-2">siga comprando, para acceder a mas promociones</p>
            @endif
    </x-card>

</article>
{{--
    <p>Puntos de promociones: {{ $points_promo }}</p>
    <p>Puntos de compras: {{ $purchase_point }}</p>
    --}}

@endsection