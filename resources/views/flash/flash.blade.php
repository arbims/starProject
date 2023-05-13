@if (session('success'))
    <div class="mt-5 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md">
        <div class="flex">
            <div>
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="mt-5 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md">
        <div class="flex">
            <div>
                {{ session('error') }}
            </div>
        </div>
    </div>
@endif
