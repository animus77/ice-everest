<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Everest') }}
        </h2>
    </x-slot>
@can('users')
    @include('admin_profile')
@endcan

@cannot('see_links')
    <p class="text-center">Solicite permisos para poder ver su perfil a nuestro numero de contacto 
        <a href="https://wa.me/+5219191463299" target="_blank" class="underline">9191463299</a></p>
@endcan

<ol class="p-2 max-w-sm">
    @can('purchase_link')
        <li class="m-2 p-2">
            <a href="{{ route('user.profile', Auth::id()) }}" class="m-2 p-2  bg-blue-400 rounded shadow">Perfil</a>
        </li>
    @endcan
    @can('purchase_link')
        <li class="m-2 p-2">
            <a href="{{ route('user.purchase', Auth::id()) }}" class="m-2 p-2  bg-blue-400 rounded">Consumo</a>
        </li>
    @endcan
    @if(Auth::user()->id == 1)
    <li></li>
    @else
    <li class="m-2 p-2"><a href="{{ route('promotions.index') }}" class="m-2 p-2  bg-blue-400 rounded">Promociones disponibles</a></li>
    @endif
</ol>
</x-app-layout>
