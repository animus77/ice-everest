<form action="{{ route('promotions.store') }}" method="post">
    <x-form name="name" for="name">
        <x-slot name="title">Nombre</x-slot>
        @error('name') {{ $message }} @enderror
    </x-form>

    <x-form name="url" for="url">
        <x-slot name="title">Url</x-slot>
        @error('url') {{ $message }} @enderror
    </x-form>
    
    <x-form name="description" for="description">
        <x-slot name="title">Descripcion</x-slot>
    </x-form>
    
    <x-form name="purchase_price" type="number" min="0" for="purchase_price">
        <x-slot name="title">Precio de compra</x-slot>
        @error('purchase_price') {{ $message }} @enderror
    </x-form>
    
    <x-form name="sale_price" type="number" min="0" for="sale_price">
        <x-slot name="title">Precio de venta</x-slot>
        @error('sale_price') {{ $message }} @enderror
    </x-form>
    
    <x-form name="point_price" type="number" min="0" for="point_price">
        <x-slot name="title">Precio en puntos</x-slot>
        @error('point_price') {{ $message }} @enderror
    </x-form>
    
    @csrf
    <x-button></x-button>
</form>