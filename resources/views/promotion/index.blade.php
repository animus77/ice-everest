@extends('layouts.layout')
@section('content')

<article class="grid sm:grid-cols-3 grid-cols-1 gap-4 p-2">
    @forelse($promotions as $promotion)
        <section class="w-52 rounded-lg mx-auto">
            <x-promotion :promotion="$promotion"/>
            <div>
                <div class="flex justify-center">
                    @can('promotions')
                    <a href="{{ route('promotions.edit', $promotion) }}" class="m-2 bg-blue-400 py-1 px-2 mt-2 font-semibold hover:bg-blue-300 rounded shadow">Editar</a>
                    @endcan
                    <form action="{{ route('promotions.destroy', $promotion) }}" method="post">
                        @csrf
                        @method('DELETE')
                        @can('promotions')
                        <x-buttondelete></x-buttondelete>
                        @endcan
                    </form>
                </div>
                @if($promotion->available == 1)
                    <p class="text-center">Disponible</p>
                @else
                    <p class="text-center">No disponible</p>
                @endif
            </div>
        </section>
    @empty
    <p>Sin promociones</p>
    @endforelse
</article>
@endsection