vista de promociones

<ul>
    @foreach($promotions as $promotion)
        <li>{{ $promotion->name }}</li>
        <li><a href="{{ route('promotions.edit', $promotion) }}">editar</a></li>
        <li>
            <form action="{{ route('promotions.destroy', $promotion) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="eliminar" onclick="return confirm('¿Desea eliminar?')">
            </form>
        </li>
    @endforeach
</ul>