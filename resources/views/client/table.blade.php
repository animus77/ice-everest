@if($purchase->product == 'agua')
    <tr class="border-b border-blue-400">
        <td class="text-sm">{{ $purchase->date }}</td>
        <td class="text-center text-sm">{{ $purchase->product }}</td>
        <td class="text-center text-sm">{{ $purchase->amount }}</td>
        <td class="text-center text-sm">${{ $purchase->price }}</td>
        <td class="text-center text-sm">${{ $purchase->paid_amount }}</td>
        <td class="text-center text-sm">${{ $purchase->debt_amount }}</td>
        @can('promotions')
        <td class="text-center text-sm">{{ $purchase->notes }}</td>
        @endcan
    </tr>
@elseif($purchase->product == 'hielo')
    <tr class="border-b border-blue-400 bg-blue-300">
        <td class="text-sm">{{ $purchase->date }}</td>
        <td class="text-center text-sm">{{ $purchase->product }}</td>
        <td class="text-center text-sm">{{ $purchase->amount }}</td>
        <td class="text-center text-sm">${{ $purchase->price }}</td>
        <td class="text-center text-sm">${{ $purchase->paid_amount }}</td>
        <td class="text-center text-sm">${{ $purchase->debt_amount }}</td>
        @can('promotions')
        <td class="text-center text-sm">{{ $purchase->notes }}</td>
        @endcan
    </tr>
@else
    <tr class="border-b border-blue-400 bg-green-400">
        <td class="text-sm">{{ $purchase->date }}</td>
        <td class="text-center text-sm">{{ $purchase->product }}</td>
        <td class="text-center text-sm">{{ $purchase->amount }}</td>
        <td class="text-center text-sm">${{ $purchase->price }}</td>
        <td class="text-center text-sm">${{ $purchase->paid_amount }}</td>
        <td class="text-center text-sm">${{ $purchase->debt_amount }}</td>
        @can('promotions')
        <td class="text-center text-sm">{{ $purchase->notes }}</td>
        @endcan
    </tr>
@endif