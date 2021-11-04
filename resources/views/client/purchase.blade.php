<ol>
    @foreach($purchases as $purchase)
        <li>{{ $purchase->date }}</li>
    @endforeach

</ol>