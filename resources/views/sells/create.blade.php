@extends('layouts.layout')
@section('content')
<article class="flex justify-center mt-2">
    <x-card size="p-2 w-80">
        <x-slot name="title">Nuevo registro</x-slot>
        <form action="{{ route('sells.store') }}" method="POST" class="bg-gray-200 p-2 shadow-lg">
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Fecha</label>
                <input id="" class="bg-gray-400 p-1 outline-none w-full" type="date" name="date">
                @error('date') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2" >Referencia</label>
                <input id="" class="bg-gray-400 p-1 outline-none w-full" sizes="text" name="user_id" min="1" list="users" placeholder="Referencia">
                @error('user_id')<span class="text-sm text-red-600 mb-1 p-1">{{ $message }}</span>@enderror
            </div>

            <div class="flex justify-between flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Cantidad</label>
                <input id="" class="bg-gray-400 p-1 outline-none w-20" type="number" name="amount" min="0" value="0">
                @error('amount') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-between flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Precio</label>
                <input id="" class="bg-gray-400 p-1 outline-none w-20" type="number" name="price" min="0" value="0">
                @error('price') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-between flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Importe pagado</label>
                <input id="" class="bg-gray-400 p-1 outline-none w-20" type="number" name="paid_amount" min="0" value="0">
                @error('paid_amount') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-between flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Importe debe</label>
                <input id="" class="bg-gray-400 p-1 outline-none w-20" type="number" name="debt_amount" min="0" value="0">
                @error('debt_amount') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-between flex-wrap mb-2">
                <label class="font-semibold mr-2" for="">Producto</label>
                <select class="bg-gray-400 p-1 outline-none w-24" name="product">
                    <option value="agua">Agua</option>
                    <option value="hielo">Hielo</option>
                    <option value="pago">Pago</option>
                </select>
            </div>

            <div class="flex justify-between flex-wrap mb-2">
                <label class="font-semibold mr-2" for="">Visita</label>
                <select class="bg-gray-400 p-1 outline-none w-24" name="order">
                    <option value="0">Visita</option>
                    <option value="1">Pedido</option>
                </select>
            </div>

            <div class="flex justify-between flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">No. de viaje</label>
                <input id="" class="bg-gray-400 p-1 outline-none w-20" type="number" name="trip" min="0">
                @error('trip') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>

            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Observaciones</label>
                <input id="" class="bg-gray-400 p-1 outline-none w-full" type="text" name="notes">
            </div>
        
            @csrf
            <x-button></x-button>
        </form>
        <datalist id="users">
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->ref }}</option>
            @endforeach
        </datalist>
    </x-card>

</article>
@endsection