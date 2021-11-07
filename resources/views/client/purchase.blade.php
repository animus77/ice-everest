@extends('layouts.layout')
@section('content')
<article class="mx-auto max-w-xl">
    <x-card size="m-2">
        <x-slot name="title">Consumo de cliente</x-slot>
            <p class="p-2">Nombre: <strong>{{ $client->name }}</strong></p>
    </x-card>
    <section class="bg-gray-200 m-2 overflow-x-auto">
        <table class="mx-auto">
            <thead>
                <tr class="border-b-2 border-blue-400">
                    <th class="text-center text-sm p-1">Fecha</th>
                    <th class="text-center text-sm p-1">Producto</th>
                    <th class="text-center text-sm p-1">Cantidad</th>
                    <th class="text-center text-sm p-1">Precio</th>
                    <th class="text-center text-sm p-1">Pagos</th>
                    <th class="text-center text-sm p-1">Deudas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($purchases as $purchase)
                    <tr class="border-b border-blue-400">
                        <td class="text-sm">{{ $purchase->date }}</td>
                        <td class="text-center text-sm">{{ $purchase->product }}</td>
                        <td class="text-center text-sm">{{ $purchase->amount }}</td>
                        <td class="text-center text-sm">${{ $purchase->price }}</td>
                        <td class="text-center text-sm">${{ $purchase->paid_amount }}</td>
                        <td class="text-center text-sm">${{ $purchase->debt_amount }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</article>
@endsection