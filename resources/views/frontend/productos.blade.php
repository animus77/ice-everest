@extends('layouts.base')
@section('content')
<p class="text-center text-xl"><strong>Productos</strong></p>
<section class="flex flex-wrap justify-center">
    <div class="w-40 p-2 m-2 bg-white shadow-xl">
        <img src="https://i.ibb.co/BK48m4j/hielologo.png" style="width: 12rem;">
        <p class="text-center">Bolsa de hielo cubitos de 5 kg</p>
    </div>
    <div class="w-40 p-2 m-2 bg-white shadow-xl">
        <img src="https://i.ibb.co/BK48m4j/hielologo.png" style="width: 12rem;">
        <p class="p-2 text-xl -rotate-45 -translate-y-20 text-blue-800">Próximamente</p>
        <p class="text-center">Bolsa de hielo rolitos de 5 kg</p>
    </div>
    <div class="w-40 p-2 m-2 bg-white shadow-xl">
        <img src="https://i.ibb.co/CBhXcFm/garrafon1.png" style="width: 12rem;">
        <p class="text-center">Agua purificada 19 litros</p>
    </div>
</section>
@endsection