<div>
    <x-card size="m-2 p-2 mx-auto max-w-xl">
        <x-slot name="title">Buscar cliente</x-slot>
        <input wire:model="search" type="text" placeholder="Ingrese Nombre" class="p-1 placeholder-white bg-gray-400 m-4 outline-none">
    </x-card>

    <section class="m-2 overflow-x-auto">
        <table class="bg-gray-200 mx-auto">
            <thead>
                <tr class="bg-blue-400">
                    <th class="text-center p-1">ID</th>
                    <th class="text-center p-1">Nombre</th>
                    <th class="text-center p-1" colspan="4">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="border-b border-blue-400">
                    <td class="p-2 text-sm">{{ $user->id }}</td>
                    <td class="py-2 text-sm">{{ $user->ref }}</td>
                    <td class="py-2 text-sm">
                        <a href="#" class="bg-blue-400 py-1 px-2 mt-2 hover:bg-blue-300 rounded shadow">Editar</a>
                    </td>
                    <td class="py-2 text-sm">
                        <a href="{{ route('user.profile', $user) }}" class="bg-blue-400 py-1 px-2 mt-2 hover:bg-blue-300 rounded shadow">Perfil</a>
                    </td>
                    <td class="py-2 text-sm">
                        <a href="{{ route('user.purchase', $user) }}" class="bg-blue-400 py-1 px-2 mt-2 hover:bg-blue-300 rounded shadow">Consumo</a>
                    </td>
                    <td class="pr-2 text-sm">
                        <a href="#" class="bg-blue-400 py-1 px-2 mt-2 hover:bg-blue-300 rounded shadow">Promo</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </section>
    
    {{-- The whole world belongs to you. --}}
</div>
