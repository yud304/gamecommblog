<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>

        </div>

        <!-- Password -->
        <div class="mt-4">

        </div>

        <!-- Remember Me -->
        <div class="block mt-4">

        </div>

        <div class="flex items-center justify-end mt-4">
        </div>
        <div>
            <a href="auth/redirect">Login with google</a>
        </div>
    </form>
</x-guest-layout>
