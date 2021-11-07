@if($sell->balance != 0 && $sell->order == 1)
    <tr class="border-b border-blue-400 bg-red-200">
        <td class="text-sm font-semibold w-3/12"><a href="{{route('user.profile', $sell->user_id)}}">{{ $sell->user->ref }}</a></td>
        <td class="text-sm text-center text-blue-400 w-1/12">{{ $sell->amount }}</td>
        <td class="text-sm text-center w-1/12">${{ $sell->paid_amount }}</td>
        <td class="text-sm text-center w-1/12">${{ $sell->debt_amount }}</td>
        <td class="text-sm text-center w-2/12"><a href="{{ route('sells.edit', $sell) }}" class="bg-blue-400 py-1 px-2 mt-2 font-semibold hover:bg-blue-300 rounded shadow">Editar</a></td>
        <td class="text-sm text-center w-2/12">
            <form action="{{ route('sells.destroy', $sell) }}" method="POST">
                @csrf
                @method('DELETE')
                <x-buttondelete></x-buttondelete>
            </form>
        </td>
    </tr>
@elseif($sell->balance == 0 && $sell->order == 1)
    <tr class="border-b border-blue-400">
        <td class="text-sm w-3/12">{{ $sell->user->ref }}</td>
        <td class="text-sm text-center w-1/12 text-blue-400">{{ $sell->amount }}</td>
        <td class="text-sm text-center w-1/12">${{ $sell->paid_amount }}</td>
        <td class="text-sm text-center w-1/12">${{ $sell->debt_amount }}</td>
        <td class="text-sm text-center w-1/6"><a href="{{ route('sells.edit', $sell) }}" class="bg-blue-400 py-1 px-2 mt-2 font-semibold hover:bg-blue-300 rounded shadow">Editar</a></td>
        <td class="text-sm text-center w-1/6">
            <form action="{{ route('sells.destroy', $sell) }}" method="POST">
                @csrf
                @method('DELETE')
                <x-buttondelete></x-buttondelete>
            </form>
        </td>
    </tr>
@elseif($sell->balance != 0 && $sell->order == 0)
    <tr class="border-b border-blue-400 bg-red-200">
        <td class="text-sm font-semibold w-3/12"><a href="{{route('user.profile', $sell->user_id)}}">{{ $sell->user->ref }}</a></td>
        <td class="text-sm text-center w-1/12">{{ $sell->amount }}</td>
        <td class="text-sm text-center w-1/12">${{ $sell->paid_amount }}</td>
        <td class="text-sm text-center w-1/12">${{ $sell->debt_amount }}</td>
        <td class="text-sm text-center w-1/6"><a href="{{ route('sells.edit', $sell) }}" class="bg-blue-400 py-1 px-2 mt-2 font-semibold hover:bg-blue-300 rounded shadow">Editar</a></td>
        <td class="text-sm text-center w-1/6">
            <form action="{{ route('sells.destroy', $sell) }}" method="POST">
                @csrf
                @method('DELETE')
                <x-buttondelete></x-buttondelete>
            </form>
        </td>
    </tr>
@elseif($sell->balance == 0 && $sell->order == 0)
    <tr class="border-b border-blue-400">
        <td class="text-sm w-3/12">{{ $sell->user->ref }}</td>
        <td class="text-sm text-center w-1/12">{{ $sell->amount }}</td>
        <td class="text-sm text-center w-1/12">${{ $sell->paid_amount }}</td>
        <td class="text-sm text-center w-1/12">${{ $sell->debt_amount }}</td>
        <td class="text-sm text-center w-1/6"><a href="{{ route('sells.edit', $sell) }}" class="bg-blue-400 py-1 px-2 mt-2 font-semibold hover:bg-blue-300 rounded shadow">Editar</a></td>
        <td class="text-sm text-center w-1/6">
            <form action="{{ route('sells.destroy', $sell) }}" method="POST">
                @csrf
                @method('DELETE')
                <x-buttondelete></x-buttondelete>
            </form>
        </td>
    </tr>
@endif
