<div>
    <section>
        <div>
            <label for="">Nombre</label>
            <input type="text" wire:model="name">

            <button wire:click.prevente="store()">Guardar</button>
        </div>
    </section>
    <section>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        <button wire:click.prevent='destroy({{ $product->id }})'>Eliminar</button>
                    </td>
                </tr>
                @empty
                <p>Sin registros</p>
                @endforelse
            </tbody>
        </table>

    </section>
</div>
