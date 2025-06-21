<x-guest-layout>
    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <h2>Admin Login</h2>

        <!-- Name -->
        <div>
            <label for="name">Name</label>
            <input id="name" name="name" type="text" required autofocus>
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</x-guest-layout>
