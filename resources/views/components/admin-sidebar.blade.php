<div class="w-64 h-screen bg-gray-800 text-white fixed">
    <div class="p-4 font-bold text-xl border-b border-gray-700">Admin Panel</div>
    <ul class="p-4 space-y-2">
        <li><a href="{{ route('admin.dashboard') }}" class="hover:text-gray-300">Dashboard</a></li>
        <li><a href="{{ route('profile.edit') }}" class="hover:text-gray-300">Profile</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-left w-full hover:text-gray-300">Logout</button>
            </form>
        </li>
    </ul>
</div>
