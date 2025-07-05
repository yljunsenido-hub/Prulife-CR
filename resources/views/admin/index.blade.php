<x-app-layout>
    @if(auth()->check() && auth()->user()->role === 'admin')
        <x-admin-sidebar />

        <div class="ml-64 p-6"> {{-- ml-64 = match sidebar width --}}
            {{-- Main content starts here --}}
            <h1 class="text-2xl font-bold mb-10">Sample Excel Import</h1>
            
            <form action="{{ route('admin.customerImport.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="import_file" required>
                <button type="submit">Import</button>
            </form>

            {{-- You can include more admin content/components here --}}
        </div>
    @endif

    

</x-app-layout>