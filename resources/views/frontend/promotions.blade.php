@extends('layouts.base')
@section('content')

<article class="grid sm:grid-cols-3 grid-cols-1 gap-4 p-4">
    @forelse($promotions as $promotion)
        <section class="w-52 rounded-lg mx-auto">
            <x-promotion :promotion="$promotion"/>
        </section>
    @empty
    <p>Sin promociones</p>
    @endforelse
</article>
<p class="text-xs m-2">*Las promociones pueden variar en colores o diseños</p>

@endsection