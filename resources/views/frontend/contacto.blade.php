@extends('layouts.base')
@section('content')
    <section class="p-2 ">
        @if(session('info'))
            <div class="bg-white">
                <p class="text-xl text-center text-blue-400 font-bold m-4 p-1">{{ session('info') }}</p>
            </div>
        @endif
        <p class="text-center text-xl"><strong>Contacto</strong></p>
        <p class="text-center p-1">Déjanos tus datos en el formulario, sera un gusto atender tus dudas o pedidos</p>
        <div class="flex flex-col-reverse justify-center md:flex-row p-6 ">
            <div class="p-2 m-2">
                <form action="{{ route('contact.store') }}" method="post">
                    <div class="flex flex-wrap mb-2 md:justify-end">
                        <label for="" class="p-1">Nombre</label>
                        <input type="text" class="p-1 m-1 outline-none w-72" name="name" placeholder="* Nombre">
                        @error('name') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-wrap mb-2 md:justify-end">
                        <label for="" class="p-1">Teléfono</label>
                        <input type="tel" class="p-1 m-1 outline-none w-72" name="phone" placeholder="* Telefono">
                        @error('phone') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-wrap mb-2 md:justify-end">
                        <label for="" class="p-1">Correo</label>
                        <input type="email" class="p-1 m-1 outline-none w-72" name="email" placeholder="* Correo">
                        @error('email') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-wrap mb-2 md:justify-end">
                        <label for="">Asunto</label>
                        <select name="subject" id="" class="p-1 m-1 outline-none w-72">
                            <option value="congelador">Solicitar congelador</option>
                            <option value="pedido">Hacer un pedido</option>
                            <option value="pregunta">Hacer una pregunta</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="flex flex-wrap mb-2 md:justify-end">
                        <label for="">Mensaje</label>
                        <textarea name="message" id="" class="p-1 m-1 w-72"></textarea>
                        @error('message') <span class="text-sm text-red-600 mb-1 p-1 w-60">{{ $message }}</span> @enderror
                    </div>

                    @csrf
                    <x-button value="Enviar mensaje"></x-button>
                </form>
            </div>
            <div class="md:w-96">
                <div class="p-1 flex">
                    <span class="mx-1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 100 100" style="enable-background:new 0 0 100 100; width:2rem;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#22B5DD;}
                        </style>
                        <path class="st0" d="M76.1,31.6c0-15.3-13.1-27.5-28.7-26C35.5,6.8,25.8,16.1,24.1,27.9c-0.6,4.1-0.2,8.1,1,11.7h0l22.3,54.8
                            c0.9,2.3,4.2,2.3,5.1,0l22.3-54.8h0C75.7,37,76.1,34.4,76.1,31.6z M50,35.7c-6.8,0-12.3-5.5-12.3-12.3c0-6.8,5.5-12.3,12.3-12.3
                            s12.3,5.5,12.3,12.3C62.3,30.2,56.8,35.7,50,35.7z"/>
                        </svg>
                    </span> 1 av sur poniente s/n barrio Jordan, Ocosingo Chiapas, c.p. 29950
                </div>
                <div class="p-1 flex">
                    <span class="mx-1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 100 100" style="enable-background:new 0 0 100 100; width:2rem" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#22B5DD;}
                        </style>
                        <path class="st0" d="M35.6,59c-5.5-9.5-7.8-19.5-7-27.3c0.4-3.7,2.5-7,5.8-8.9l5-2.9c1-0.6,2.4-0.2,3,0.8l4.5,7.9
                            c0.6,1,0.2,2.4-0.8,3l-6.8,3.9c-0.5,5.4,1.1,12.1,4.8,18.6c3.7,6.5,8.8,11.3,13.7,13.5l6.8-3.9c1-0.6,2.4-0.2,3,0.8l4.5,7.9
                            c0.6,1,0.2,2.4-0.8,3l-5,2.9c-3.2,1.9-7.2,2.1-10.6,0.6C48.5,75.6,41.1,68.5,35.6,59"/>
                        <g>
                            <path class="st0" d="M50,12.1c20.9,0,37.9,17,37.9,37.9S70.9,87.9,50,87.9S12.1,70.9,12.1,50S29.1,12.1,50,12.1 M50,6.1
                                C25.8,6.1,6.1,25.8,6.1,50S25.8,93.9,50,93.9S93.9,74.2,93.9,50S74.2,6.1,50,6.1L50,6.1z"/>
                        </g>
                        </svg>
                    </span>
                    919 146 3299; 919 141 0420
                </div>
                <div class="p-1 flex ">
                    <span class="mx-1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 100 100" style="enable-background:new 0 0 100 100; width:2rem" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#22B5DD;}
                        </style>
                        <path class="st0" d="M88.7,77.6H11.3c-2.8,0-5-2.3-5-5V27.5c0-2.8,2.3-5,5-5h77.4c2.8,0,5,2.3,5,5v45.1
                            C93.7,75.3,91.5,77.6,88.7,77.6z M11.3,26.4c-0.6,0-1,0.5-1,1v45.1c0,0.6,0.5,1,1,1h77.4c0.6,0,1-0.5,1-1V27.5c0-0.6-0.5-1-1-1H11.3
                            z"/>
                        <polygon class="st0" points="50,52.3 9.8,27.7 11.9,24.3 50,47.7 88.4,24.1 90.5,27.5 "/>
                        </svg>
                    </span>
                    everest212@outlook.com
                </div>
            </div>
        </div>
    </section>
@endsection