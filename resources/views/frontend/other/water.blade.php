@extends('layouts.base')
@section('content')
    <p class="p-2 text-center text-2xl">Conoce nuestro proceso de purificacion</p>
    <section class="p-2 my-2 mx-4 shadow-2xl bg-white rounded-xl">
        <div class="p-2">
            <p class="text-center text-2xl py-2 text-white">La unica agua que acaba con la sed</p>
            <p class="text-xl">Para poder ofrecerte la mejor calidad de agua, nuestra planta sigue los siguientes pasos:</p>
            <ol class="p-2 list-decimal">
                <li>Desinfeccion</li>
                <li>Filtracion con medios granuales</li>
                <li>Filtracion con carbon activado</li>
                <li>Suavizacion</li>
                <li>Ozono</li>
                <li>Luz UV</li>
            </ol>
        </div>
    </section>
    <section class="p-2">
        <p class="text-center text-xl p-2"><strong>Etapas del sistema de purificacion de agua</strong></p>
        <img src="https://i.ibb.co/6068TZr/planta1-2.png" alt="" class="mx-auto">
    </section>
    <section class="p-2 my-2 mx-4 shadow-2xl bg-white rounded-xl">
        <p class="text-center"><strong>Productos</strong></p>
        <div class="flex justify-center">
            <div class="w-40 p-2 m-2">
                <img src="https://i.ibb.co/vm2j1vy/garrafon-Fondo.png" style="width: 12rem;">
                <p class="">Agua purificada 19 litros</p>
            </div>
        </div>
    </section>
@endsection