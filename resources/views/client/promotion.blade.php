@extends('layouts.layout')
@section('content')
<article class="flex justify-center m-2">
    <x-card size="p-2 w-80">
        <x-slot name="title">Agregar promocion</x-slot>
        <form action="{{ route('user.update', $user) }}" method="POST" class="bg-gray-200 p-2 shadow-lg">
            <div class="flex flex-wrap mb-2">
                <label for="" class="font-semibold mr-2">Nombre</label>
                <input type="text" class="bg-gray-400 p-1 outline-none w-full" name="name" value="{{ $user->name }}" disabled>
            </div>
            <p><strong>Promociones</strong></p>
            <div class="m-2 flex flex-wrap p-2">
            @foreach($promotions as $promotion)
                <div class="p-2">
                    <input type="checkbox" name="promotions[]" value="{{ $promotion->id }}">
                    <label>{{ $promotion->name }}</label>
                    <img src="{{ $promotion->url }}" alt="promociones" class="w-20 h-20">
                </div>
            @endforeach
            </div>

            @csrf
            @method('PUT')
            <x-button></x-button>
        </form>
    </x-card>
</article>
@endsection