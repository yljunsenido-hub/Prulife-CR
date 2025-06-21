<x-app-layout>
    @if(auth()->check() && auth()->user()->role === 'admin')
        <x-admin-sidebar />

        <div class="ml-64 p-6">
            <div class="max-w-8xl mx-auto space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                           Profile
                        </div>
                    </div>
            </div>
            <div class="py-7">
                <div class="max-w-8xl mx-auto space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    

    
</x-app-layout>
