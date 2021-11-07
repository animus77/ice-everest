@extends('layouts.layout')
@section('content')
<ol>
    @foreach($purchases as $purchase)
        <li>{{ $purchase->date }}</li>
    @endforeach

</ol>
@endsection