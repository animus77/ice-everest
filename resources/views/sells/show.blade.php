@extends('layouts.layout')
@section('content')
<section class="bg-gray-200 max-w-xl mx-auto p-2 m-2">
    <p class="text-center"><strong>Consumo de los clientes durante el mes: {{ $id }}</strong></p>
</section>
<section class="bg-gray-200 max-w-xl mx-auto p-2 m-2 overflow-x-auto">
    <table class="mx-auto">
        <thead>
            <tr class="border-b-2 border-blue-400">
                <th rowspan="2">Id</th>
                <th rowspan="2">Ref</th>
                <th rowspan="2">Saldo</th>
                <th colspan="31">Dias</th>
            </tr>
            <tr class="border-b-2 border-blue-400">
                <th colspan="31">Cantidad</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="border-b border-blue-400">
                @foreach($deudas as $deuda)
                    @if($loop->iteration == $user->id && $deuda > 0)
                        <td rowspan="2" class="bg-red-200">{{ $user->id }}</td>
                        <td rowspan="2" class="bg-red-200">{{ $user->ref }}</td>
                        <td rowspan="2" class="bg-red-200 text-center">${{ $deuda }}</td>
                    @elseif($loop->iteration == $user->id && $deuda == 0)
                        <td rowspan="2">{{ $user->id }}</td>
                        <td rowspan="2">{{ $user->ref }}</td>
                        <td rowspan="2" class="text-center">-</td>
                    @endif
                @endforeach
                @foreach($sells as $sell)
                    @if($sell->user_id == $user->id)
                        <th class="py-1">{{ $sell->day }}</th>
                    @endif
                @endforeach
            </tr>
            <tr class="border-b border-blue-400">
                @foreach($sells as $sell)
                    @if($sell->user_id == $user->id && $sell->product == "agua")
                        <td class="px-1">{{ $sell->amount }}</td>
                    @elseif($sell->user_id == $user->id && $sell->product == "hielo")
                        <td class="px-1 bg-blue-200">{{ $sell->amount }}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</section>
@endsection