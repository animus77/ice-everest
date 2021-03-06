<img src="{{ $promotion->url }}" class="w-52 h-52 rounded-t-lg shadow-lg">
<div class="bg-gray-200 rounded-b-lg shadow-lg">
    <h3 class="font-semibold text-center p-1">{{ $promotion->name }}</h3>
    <p class="text-center text-sm">{{ $promotion->description }}</p>
    <div class="flex pt-2 bg-blue-500 mt-2 rounded-b-lg">
        <div class="p-1">
            <p class="text-center text-white text-sm">Precio de venta</p>
            <p class="text-center text-white font-semibold">${{ $promotion->sale_price }}</p>
        </div>
        <div class="p-1">
            <p class="text-center text-white text-sm">Precio en puntos</p>
            <p class="text-center text-white font-semibold">{{ $promotion->point_price }}</p>
        </div>
    </div>
</div>