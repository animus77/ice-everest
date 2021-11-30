@extends('layouts.layout')
@section('content')
<section class="p-2 my-2 bg-gray-200 max-w-2xl mx-auto overflow-x-auto">
    <table>
        <thead>
            <tr class="border-b-2 border-blue-400">
                <td class="text-center text-sm">Id</td>
                <td class="text-center text-sm">Nombre</td>
                <td class="text-center text-sm">Telefono</td>
                <td class="text-center text-sm">E-mail</td>
                <td class="text-center text-sm">Asunto</td>
                <td class="text-center text-sm">Mensaje</td>
                <td class="text-center text-sm">Opciones</td>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
                <tr class="border-b border-blue-400">
                    <td class="text-sm p-1">{{ $contact->id }}</td>
                    <td class="text-sm p-1">{{ $contact->name }}</td>
                    <td class="text-sm p-1">{{ $contact->phone }}</td>
                    <td class="text-sm p-1">{{ $contact->email }}</td>
                    <td class="text-sm p-1">{{ $contact->subject }}</td>
                    <td class="text-sm p-1">{{ $contact->message }}</td>
                    <td>
                        <form action="{{ route('contact.destroy', $contact) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <x-buttondelete></x-buttondelete>
                        </form>
                    </td>
                </tr>
                @empty
                <p>sin mensajes</p>
            @endforelse
        </tbody>
    </table>

</section>
@endsection