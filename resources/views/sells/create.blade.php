<form action="{{ route('sells.store') }}" method="POST">
    <x-form name="date" type="date" for="date">
        <x-slot name="title">Fecha</x-slot>
        @error('title') {{ $message }} @enderror
    </x-form>

    <div>
        <label for="">Referencia</label>
        <input type="text" name="user_id" min="1" list="users">
        @error('user_id')<span>{{ $message }}</span>@enderror
    </div>

    <x-form name="amount" type="number" for="amount" min=0>
        <x-slot name="title">Cantidad</x-slot>
        @error('amount') {{ $message }} @enderror
    </x-form>

    <x-form name="price" type="number" for="price" min=0>
        <x-slot name="title">Precio</x-slot>
        @error('price') {{ $message }} @enderror
    </x-form>

    <x-form name="paid_amount" type="number" for="paid_amount" min=0>
        <x-slot name="title">Importe pagado</x-slot>
        @error('paid_amount') {{ $message }} @enderror
    </x-form>

    <x-form name="debt_amount" type="number" for="debt_amount" min=0>
        <x-slot name="title">Importe debe</x-slot>
        @error('debt_amount') {{ $message }} @enderror
    </x-form>
    <div>
        <label for="">Producto</label>
        <select name="product">
            <option value="agua">Agua</option>
            <option value="hielo">Hielo</option>
            <option value="pago">Pago</option>
        </select>
    </div>
    <div>
        <label for="">Visita</label>
        <select name="order">
            <option value="0">Visita</option>
            <option value="1">Pedido</option>
        </select>
    </div>

    <x-form name="trip" type="number" for="trip" min=0>
        <x-slot name="title">No. de viaje</x-slot>
        @error('trip') {{ $message }} @enderror
    </x-form>

    <x-form name="notes" type="text" for="notes">
        <x-slot name="title">Observaciones</x-slot>
    </x-form>

    @csrf
    <x-button></x-button>
</form>
<datalist id="users">
    @foreach($users as $user)
    <option value="{{ $user->id }}">{{ $user->ref }}</option>
    @endforeach
</datalist>