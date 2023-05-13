@extends('layouts.base')

@section('content')
    <div class="mt-10 mb-10">
        <a href="{{ route('adminstar.create') }}"
            class="inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase text-white">Ajout d'un
            star</a>
    </div>
    <h3 class="mb-10 mt-10 text-3xl font-medium leading-tight text-primary">Liste des stars </h3>
    <table class="min-w-full text-left text-sm font-light">
        <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
                <th class="px-6 py-4">Image</th>
                <th class="px-6 py-4">Nom</th>
                <th class="px-6 py-4">Prenom</th>
                <th class="px-6 py-4">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stars as $star)
                <tr class="border-b dark:border-neutral-500">
                    <td class="whitespace-nowrap px-6 py-4">{{ $star->image }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $star->nom }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $star->prenom }}</td>
                    <td class="whitespace-nowrap px-6 py-4">
                        <div class="flex">
                          <a href="{{ route('adminstar.edit', $star) }}" class="inline rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase text-white ml-2">Editer</a>
                        <form action="{{ route('adminstar.destroy', $star) }}" method="post" onclick="return confirm('Voulez Vous supprimer ?')">
                            @csrf
                            @method('delete')
                            <button class="inline rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase text-white ml-2">Supprimer</button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
