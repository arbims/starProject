@if (session('success'))
    <div class="mt-5 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md">
        <div class="flex">
            <div>
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif
