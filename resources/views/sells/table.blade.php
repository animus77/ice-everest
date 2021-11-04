<tr>
    <td>{{ $sell->user->ref }}</td>
    <td>{{ $sell->amount }}</td>
    <td>{{ $sell->product }}</td>
    <td>{{ $sell->paid_amount }}</td>
    <td>{{ $sell->debt_amount }}</td>
    <td><a href="{{ route('sells.edit', $sell) }}">Editar</a></td>
    <td>
        <form action="{{ route('sells.destroy', $sell) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar')">
        </form>
    </td>
</tr>