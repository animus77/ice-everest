@extends('layouts.base')
@section('content')
    <p class="text-center p-2 text-2xl">¿Quieres distribuir?</p>
    <section class="p-2 my-2 mx-4 shadow-2xl bg-white rounded-xl">
        <p class="text-center text-xl"><strong>Productos</strong></p>
        <div class="flex flex-wrap justify-center">
            <div class="w-40 m-2 p-2 border border-gray-400">
                <img src="https://i.ibb.co/BK48m4j/hielologo.png" alt="">
                <p class="text-center">Bolsa de hielo en cubos 5 kg</p>
            </div>
            <div class="w-40 m-2 p-2 border border-gray-400">
                <img src="https://i.ibb.co/BK48m4j/hielologo.png" alt="">
                <p class="text-center">Bolsa de hielo en rolitos 5 kg</p>
            </div>
            <div class="w-40 m-2 p-2 border border-gray-400">
                <img src="https://i.ibb.co/vm2j1vy/garrafon-Fondo.png" alt="">
                <p class="text-center">Agua purificada 19 litros</p>
            </div>
        </div>
        
    </section>
    <section class="p-2 my-2 mx-4 shadow-2xl bg-white rounded-xl">
        <p class="text-center text-xl p-2 "><strong>Servicios</strong></p>
        <div class="flex flex-wrap justify-center">
            <div class="w-72 m-2 p-2 ">
                <img src="https://i.ibb.co/SBFBY7v/congelador.png" alt="">
                <p class="text-center text-xl m-2">Prestamo de congeladores</p>
                <p class="text-gray-600">Equipos a tu disposicion para la venta de hielo</p>
            </div>
            <div class="w-60 m-2 p-2 ">
                <img src="https://i.ibb.co/NSw4sLX/exhibid1o2r.png" alt="">
                <p class="text-center text-xl m-2">Prestamo de exhibidores</p>
                <p class="text-gray-600">Exhibidores a tu disposicion para la venta de agua purificada</p>
            </div>
            <div class="w-72 m-2 p-2 ">
                <img src="https://i.ibb.co/SBFBY7v/congelador.png" alt="">
                <p class="text-center text-xl m-2">Entregas a domicilio</p>
                <p class="text-gray-600"> Cada vez que compras adquieres puntos el cual podras cambiar 
                    por alguna de nuestras pomociones disponibles 
                </p>
            </div>
        </div>
    </section>
@endsection