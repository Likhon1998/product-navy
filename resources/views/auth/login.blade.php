@extends('layouts.guest')

@section('content')
<div class="mb-6 flex justify-center">
    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-24 w-auto object-contain">
</div>

<div class="w-full sm:max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-6 py-8">
        <h2 class="text-xl sm:text-2xl font-bold text-center text-gray-800 mb-6">Login to Your Account</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-xs sm:text-sm" :status="session('status')" />

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-xs sm:text-sm font-medium mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="w-full border border-gray-300 p-2 rounded text-xs sm:text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs sm:text-sm" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-xs sm:text-sm font-medium mb-1">Password</label>
                <input id="password" type="password" name="password" required
                       class="w-full border border-gray-300 p-2 rounded text-xs sm:text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs sm:text-sm" />
            </div>

            <!-- Remember Me -->
            <div class="mb-4 flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500">
                <label for="remember_me" class="ml-2 text-gray-600 text-xs sm:text-sm">Remember me</label>
            </div>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-xs sm:text-sm text-blue-600 hover:underline mb-2 sm:mb-0" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif

                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow text-xs sm:text-sm w-full sm:w-auto">
                    Log in
                </button>
            </div>
        </form>
    </div>
</div>

<div class="mt-6 text-center text-gray-500 text-xs sm:text-sm">
    &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
</div>
@endsection
