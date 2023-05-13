@extends('layouts.base')

@section('content')
    <div class="w-full max-w-xs mx-auto mt-20">
        <form action="{{ route('auth.login') }}" method="POST" class="bg-gray-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="Email" value="{{ old('email') }}" name="email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Mot de passe
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="Mot de passe" name="password">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Se connecter
                </button>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2023 Star App.
        </p>
    </div>
@endsection
