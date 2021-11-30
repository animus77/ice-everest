@extends('layouts.base')
@section('content')
<article class="md:flex">
    <section>
        <p class="text-center">Productos</p>
        <div class="p-2 flex flex-wrap">
            <div class="grid md:grid-cols-2 md:mx-8 gap-4">
                <div class="p-1 mt-2 border-white border-b-2 md:border-0">
                    <h3 class="text-center font-semibold text-xl">Agua purificada</h3>
                    <div class="flex justify-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6.8 11a6 6 0 1 0 10.396 0l-5.197 -8l-5.2 8z" />
                        </svg>
                    </div>
                    <p class="pb-2 text-xl">Llevese la mejor agua al mejor precio, hay algo mas que debo poner</p>
                    <a href="{{ url('water-info') }}" class="bg-gray-900 block text-center text-white text-xl font-semibold p-1 mb-2 hover:bg-gray-800">Mas información</a>
                </div>
                <!-- seccion de hielo -->
                <div class="p-1 mt-2 border-white border-b-2 md:border-0">
                    <h3 class="text-center font-semibold text-xl">Hielo</h3>
                    <div class="flex justify-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-snowflake" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" />
                            <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(60 12 12)" />
                            <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(120 12 12)" />
                            <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(180 12 12)" />
                            <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(240 12 12)" />
                            <path d="M10 4l2 1l2 -1m-2 -2v6.5l3 1.72" transform="rotate(300 12 12)" />
                        </svg>
                    </div>
                    <p class="pb-2 text-xl">No dejes que el calor opaque tus momentos, refrescate con hielos Everest</p>
                    <a href="{{ url('ice-info') }}" class="bg-gray-900 block text-center text-white text-xl font-semibold p-1 mb-2 hover:bg-gray-800">Mas información</a>
                </div>
                <!-- termina seccion de hielo -->
                <div class="p-1 mt-2 border-white border-b-2 md:border-0">
                    <h3 class="text-center font-semibold text-xl">¿Quieres distribuir?</h3>
                    <div class="flex justify-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="3" y1="21" x2="21" y2="21" />
                            <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                            <line x1="5" y1="21" x2="5" y2="10.85" />
                            <line x1="19" y1="21" x2="19" y2="10.85" />
                            <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                        </svg>
                    </div>
                    <p class="pb-2 text-xl">Si te interesa ser distribuidor de agua o hielo Everest, llamanos a nuestros numeros</p>
                    <a href="{{ url('venta-info') }}" class="bg-gray-900 block text-center text-white text-xl font-semibold p-1 mb-2 hover:bg-gray-800">Mas información</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <p class="text-center">servicios</p>
        <div class="grid md:grid-cols-2 md:mx-8 gap-4">
            <div class="p-1 mt-2 border-white border-b-2 md:border-0">
                <h3 class="text-center font-semibold text-xl">Tableros</h3>
                <div class="flex justify-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="3" y1="21" x2="21" y2="21" />
                        <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                        <line x1="5" y1="21" x2="5" y2="10.85" />
                        <line x1="19" y1="21" x2="19" y2="10.85" />
                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                    </svg>
                </div>
                <p class="pb-2 text-xl">Si te interesa ser distribuidor de agua o hielo Everest, llamanos a nuestros numeros</p>
                <a href="{{ url('venta-info') }}" class="bg-gray-900 block text-center text-white text-xl font-semibold p-1 mb-2 hover:bg-gray-800">Mas información</a>
            </div>
            <div class="p-1 mt-2 border-white border-b-2 md:border-0">
                <h3 class="text-center font-semibold text-xl">Remodelacion</h3>
                <div class="flex justify-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="3" y1="21" x2="21" y2="21" />
                        <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                        <line x1="5" y1="21" x2="5" y2="10.85" />
                        <line x1="19" y1="21" x2="19" y2="10.85" />
                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                    </svg>
                </div>
                <p class="pb-2 text-xl">Si te interesa ser distribuidor de agua o hielo Everest, llamanos a nuestros numeros</p>
                <a href="{{ url('venta-info') }}" class="bg-gray-900 block text-center text-white text-xl font-semibold p-1 mb-2 hover:bg-gray-800">Mas información</a>
            </div>

        </div>
    
    </section>
</article>
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
            <p>Forma parte de nosotros, realiza tus pedidos y te lo llevamos</p>
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
            <p>Cada vez que compras con nosotros acumulas puntos que podras cambiar por alguna de nuestras promociones</p>
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
@endsection