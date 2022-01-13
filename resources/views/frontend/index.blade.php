@extends('layouts.base')
@section('content')
<article class="bg-white p-2 m-4 rounded-lg shadow-lg">
    <h2 class="text-center text-2xl">¿Por que comprar con nosotros?</h2>
    <!-- seccion de pedidos -->
    <section class="grid md:grid-cols-3 md:mx-8 gap-4 p-2">
        <div class="mt-2">
            <h3 class="text-center text-blue-600 font-semibold text-xl mb-2">Cubrimos tus pedidos</h3>
            <div class="flex justify-center ">
                <div class="bg-blue-400 rounded-full h-24 w-24 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck-delivery" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="7" cy="17" r="2" />
                        <circle cx="17" cy="17" r="2" />
                        <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                        <line x1="3" y1="9" x2="7" y2="9" />
                    </svg>
                </div>
            </div>
            <p>Forma parte de nosotros, suscribete, realiza tus pedidos y te lo llevamos</p>
        </div>
        <!-- seccion de promociones -->
        <div class="mt-2">
            <h3 class="text-center text-blue-600 font-semibold text-xl mb-2">Promociones</h3>
            <div class="flex justify-center ">
                <div class="bg-blue-400 rounded-full h-24 w-24 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gift" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="3" y="8" width="18" height="4" rx="1" />
                        <line x1="12" y1="8" x2="12" y2="21" />
                        <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" />
                        <path d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" />
                    </svg>
                </div>
            </div>
            <p>Cada vez que compras con nosotros acumulas puntos que podras cambiar por alguna de nuestras promociones disponibles</p>
        </div>
        <!-- seccion de eventos -->
        <div class="mt-2">
            <h3 class="text-center text-blue-600 font-semibold text-xl mb-2">Eventos</h3>
            <div class="flex justify-center ">
                <div class="bg-blue-400 rounded-full h-24 w-24 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-confetti" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 5h2" />
                        <path d="M5 4v2" />
                        <path d="M11.5 4l-.5 2" />
                        <path d="M18 5h2" />
                        <path d="M19 4v2" />
                        <path d="M15 9l-1 1" />
                        <path d="M18 13l2 -.5" />
                        <path d="M18 19h2" />
                        <path d="M19 18v2" />
                        <path d="M14 16.518l-6.518 -6.518l-4.39 9.58a1.003 1.003 0 0 0 1.329 1.329l9.579 -4.39z" />
                    </svg>
                </div>
            </div>
            <p>¿Tienes un evento y necesitas hielo?, nosotros te rentamos el congelador y llevamos los hielos</p>
        </div>
    </section>
</article>
<article class="bg-white p-2 m-4 rounded-lg shadow-lg">
    <p class="text-center text-xl"><strong>Productos</strong></p>
    <section class="flex flex-wrap justify-center">
        <div class="w-40 p-2 m-2 shadow-xl">
            <img src="https://i.ibb.co/BK48m4j/hielologo.png" style="width: 12rem;">
            <p class="text-center">Bolsa de hielo cubitos de 5 kg</p>
        </div>
        <div class="w-40 p-2 m-2 shadow-xl">
            <img src="https://i.ibb.co/BK48m4j/hielologo.png" style="width: 12rem;">
            <p class="text-center">Bolsa de hielo rolitos de 5 kg</p>
        </div>
        <div class="w-40 p-2 m-2 shadow-xl">
            <img src="https://i.ibb.co/CBhXcFm/garrafon1.png" style="width: 12rem;">
            <p class="text-center">Agua purificada 19 litros</p>
        </div>
    </section>
</article>
@endsection