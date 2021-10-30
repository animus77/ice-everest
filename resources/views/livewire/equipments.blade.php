<div>
    <section>
        <div>
            <label for="">Nombre</label>
            <input type="text" wire:model="name">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
            <button wire:click.prevent='store()'>Guardar</button>
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
                @forelse($equipments as $equipment)
                <tr>
                    <td>{{ $equipment->id }}</td>
                    <td>{{ $equipment->name }}</td>
                    <td>
                        <button wire:click.prevent='destroy({{ $equipment->id }})'>Eliminar</button>
                    </td>
                </tr>
                @empty
                <p>Aun no hay registros</p>
                @endforelse
            </tbody>
        </table>
            

    </section>
</div>
