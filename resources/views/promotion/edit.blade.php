@extends('layouts.layout')
@section('content')
<article class="flex justify-center">
    <x-card size="p-2 w-80">
        <x-slot name="title">Editar promocion</x-slot>
        <form action="{{ route('promotions.update', $promotion) }}" method="post" class="bg-gray-200 p-2 shadow-lg">
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Titulo</label>
                <input type="text" class="bg-gray-400 p-1 outline-none w-full" name="name" value="{{ $promotion->name }}">
                @error('name') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Descripcion</label>
                <input type="text" class="bg-gray-400 p-1 outline-none w-full" name="description" value="{{ $promotion->description}}">
                @error('description') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Url imagen</label>
                <input type="text" class="bg-gray-400 p-1 outline-none w-full" name="url" value="{{ $promotion->url}}">
                @error('url') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap justify-between mb-2">
                <label for="" class="font-semibold mr-2">Disponibilidad</label>
                <select name="available" class="bg-gray-400 p-1 outline-none">
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>
            <div class="flex flex-wrap justify-between mb-2">
                <label for="" class="font-semibold mr-2">Precio de compra</label>
                <input type="number" class="bg-gray-400 p-1 outline-none w-24" name="purchase_price" value="{{ $promotion->purchase_price}}">
                @error('purchase_price') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap justify-between mb-2">
                <label for="" class="font-semibold mr-2">Precio de venta</label>
                <input type="number" class="bg-gray-400 p-1 outline-none w-24" name="sale_price" value="{{ $promotion->sale_price}}">
                @error('sale_price') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap justify-between mb-2">
                <label for="" class="font-semibold mr-2">Precio en puntos</label>
                <input type="number" class="bg-gray-400 p-1 outline-none w-24" name="point_price" value="{{ $promotion->point_price}}">
                @error('point_price') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            
            @csrf
            @method('PUT')
            <x-button value="Enviar"></x-button>
        </form>
    </x-card>
</article>
@endsection