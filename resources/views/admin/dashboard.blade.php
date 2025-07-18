<x-app-layout>
    @if(auth()->check() && auth()->user()->role === 'admin')
        <x-admin-sidebar />

        <div class="ml-64 p-6"> {{-- ml-64 = match sidebar width --}}
            {{-- Main content starts here --}}
            <h1 class="text-2xl font-bold">Welcome Admin</h1>
            <p>This is your dashboard.</p>

            {{-- You can include more admin content/components here --}}
        </div>
    @endif
</x-app-layout>
