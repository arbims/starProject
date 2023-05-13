<form action="{{ route($star->exists ? 'adminstar.update' : 'adminstar.store', $star) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($star->id ? "PATCH" : "POST")
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="nom">
                Nom
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="nom" type="text" name="nom"value="{{ old('nom', $star->nom) }}">
            @error('nom')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="prenom">
                Prénom
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="prenom" type="text" name="prenom" value="{{ old('prenom', $star->prenom) }}">
            @error('prenom')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="image">
                Image
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="image" type="file" name="image">
            @error('image')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                Description
            </label>
            <textarea
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="description" name="description"> {{ old('description', $star->description) }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <button
        class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        @if ($star->id)
            Modifier
        @else
            Créer
        @endif
    </button>
</form>
