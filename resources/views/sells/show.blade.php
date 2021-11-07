@extends('layouts.layout')
@section('content')
{{--
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
    --}}

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
    <tbody>
    @foreach($users as $user)
        <tr>
            <td rowspan="2">{{ $user->id }}</td>
            <td rowspan="2">{{ $user->ref }}</td>
            @foreach($sells as $sell)
            @if($sell->user_id == $user->id)
                    <td>{{ $sell->day }}</td>
                @endif
            @endforeach
        </tr>
        <tr>
            @foreach($sells as $sell)
                @if($sell->user_id == $user->id)
                    <td>{{ $sell->amount }}</td>
                @endif
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
@endsection