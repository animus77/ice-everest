@extends('layouts.layout')
@section('content')
<article class="flex justify-center m-2">
    <x-card size="p-2 w-80">
        <x-slot name="title">Editar usuario</x-slot>
        <form action="{{ route('users.update', $user) }}" method="post" class="bg-gray-200 p-2 shadow-lg">
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Nombre</label>
                <input type="text" class="bg-gray-400 p-1 outline-none w-full" name="name" value="{{ $user->name }}">
                @error('name') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Correo</label>
                <input type="text" class="bg-gray-400 p-1 outline-none w-full" name="email" value="{{ $user->email }}" readonly>
                @error('email') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Referencia</label>
                <input type="text" class="bg-gray-400 p-1 outline-none w-full" name="ref" value="{{ $user->ref }}">
                @error('ref') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Direccion</label>
                <input type="text" class="bg-gray-400 p-1 outline-none w-full" name="address" value="{{ $user->address }}">
                @error('address') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Documento</label>
                <input type="text" class="bg-gray-400 p-1 outline-none w-full" name="url" value="{{ $user->url_document }}">
            </div>
            <p><strong>Productos</strong></p>
            @foreach($products as $product)
                <div>
                    <input type="checkbox" name="products[]" value="{{ $product->id }}">
                    <label>{{ $product->name }}</label>
                </div>
            @endforeach
            <p><strong>Equipos</strong></p>
            @foreach($equipments as $equipment)
                <div>
                    <input type="checkbox" name="equipments[]" value="{{ $equipment->id }}">
                    <label>{{ $equipment->name }}</label>
                </div>
            @endforeach
            <p><strong>Permiso</strong></p>
            @foreach($roles as $rol)
                <div>
                    <input type="checkbox" name="roles[]" value="{{ $rol->id }}">
                    <label>{{ $rol->name }}</label>
                </div>
            @endforeach
            
            @csrf
            @method('PUT')
            <x-button></x-button>
        </form>
    </x-card>
</article>
@endsection