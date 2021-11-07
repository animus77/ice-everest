<article class="grid sm:grid-cols-3 grid-cols-1 gap-2 bg-gray-400 p-2">
    <x-card size="p-0">
        <x-slot name="title">Opciones de venta</x-slot>
        <ol class="p-1">
            <li class="p-1"><a href="{{ route('sells.create') }}">Nuevo registro</a></li>
            <li class="p-1"><a href="{{ route('sells.index') }}">Consulta de venta diaria</a></li>
        </ol>
    </x-card>
    <x-card size="p-0">
        <x-slot name="title">Consulta mensual</x-slot>
        <ol class="flex flex-wrap">
            @for($i = 1; $i <= 12; $i++)
                <li class="m-1 p-1"><a class="w-8 ring ring-blue-800 rounded text-sm text-white p-1 m-2 bg-blue-400" href="{{ route('sells.show', $i) }}">{{ $i }}</a></li>     
            @endfor
        </ol>
    </x-card>
    
    <x-card size="p-0">
        <x-slot name="title">Administracion</x-slot>
        <ol class="p-1">
            <li class="p-1"><a href="{{ url('equipments') }}">Nuevo equipo</a></li>
            <li class="p-1"><a href="{{ url('products') }}">Nuevo producto</a></li>
            <li class="p-1"><a href="{{ url('users') }}">Consultar clientes</a></li>
            <li class="p-1"><a href="#">Permisos</a></li>
        </ol>
    </x-card>
    <x-card size="p-0">
        <x-slot name="title">Promociones</x-slot>
        <ol class="p-1">
            <li class="p-1"><a href="{{ route('promotions.create') }}">Nueva promocion</a></li>
            <li class="p-1"><a href="{{ route('promotions.index') }}">Consultar promociones</a></li>
        </ol>
    </x-card>
</article>
