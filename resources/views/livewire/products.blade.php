<div class="flex flex-wrap">
    <x-card size="m-2">
        <x-slot name="title">Nueo Producto</x-slot>
        <div class="p-2">
            <label for="" class="font-semibold mr-2">Nombre</label>
            <input type="text" wire:model="name" class="bg-gray-400 p-1 outline-none">
            @error('name') <span>{{ $message }}</span> @enderror
            <button wire:click.prevente="store()" class="bg-blue-400 py-1 px-2 mt-2 font-semibold hover:bg-blue-300 rounded shadow">Guardar</button>
        </div>
    </x-card>

    <section class="m-2 mx-auto">
        <table class="bg-gray-200 shadow-lg">
            <thead>
                <tr class="bg-blue-400">
                    <th class="p-2">ID</th>
                    <th class="p-2">Nombre</th>
                    <th class="p-2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr class="border-b-2 border-white">
                    <td class="p-2 text-center">{{ $product->id }}</td>
                    <td class="p-2 text-center">{{ $product->name }}</td>
                    <td class="p-2 text-center">
                    <button wire:click.prevent='destroy({{ $product->id }})' class="bg-red-400 py-1 px-2 mt-2 font-semibold hover:bg-red-300 rounded shadow">Eliminar</button>
                    </td>
                </tr>
                @empty
                <p class="text-center text-xl p-2">Sin registros</p>
                @endforelse
            </tbody>
        </table>

    </section>
</div>
