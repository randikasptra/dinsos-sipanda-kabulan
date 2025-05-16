<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <input type="email" name="email" required />

        <!-- Password -->
        <input type="password" name="password" required />

        <!-- Role -->
        <select name="role" required>
            <option value="operator">Operator</option>
            <option value="admin">Verifikator Admin</option>
        </select>

        <button type="submit">Login</button>
    </form>

</x-guest-layout>
