<x-app-layout>
    @if(auth()->check() && auth()->user()->role === 'admin')
        <x-admin-sidebar />

        <div class="ml-64 p-6"> {{-- ml-64 = match sidebar width --}}
            {{-- Main content starts here --}}
            <h1 class="text-2xl font-bold mb-10">SCIC View Page</h1>

            {{-- You can include more admin content/components here --}}
        </div>
    @endif

    

</x-app-layout>