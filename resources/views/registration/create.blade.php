@extends('master')
@section('title', 'Register')

@section('content')
<div class="w-full max-w-md mx-auto">

    <!-- Card -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

        <!-- Card Header -->
        <div class="px-8 pt-8 pb-4">
            <h2 class="text-2xl font-bold text-gray-800">Create an account</h2>
            <p class="text-sm text-gray-400 mt-1">Fill in the details below to get started</p>
        </div>

        <!-- Flash Message -->
        @if (session()->has('flash_message'))
            <div class="mx-8 mb-2 px-4 py-3 bg-green-50 border border-green-200 text-green-700 text-sm rounded-lg">
                {{ session()->get('flash_message') }}
            </div>
        @endif

        <!-- Form Body -->
        <div class="px-8 pb-8">
            <form action="{{ route('registration.store') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Email -->
                <div>
                    <input
                        type="email"
                        name="email"
                        placeholder="Email address"
                        value="{{ old('email') }}"
                        required
                        class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- First Name -->
                <div>
                    <input
                        type="text"
                        name="first_name"
                        placeholder="First name"
                        value="{{ old('first_name') }}"
                        required
                        class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
                    @error('first_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Last Name -->
                <div>
                    <input
                        type="text"
                        name="last_name"
                        placeholder="Last name"
                        value="{{ old('last_name') }}"
                        required
                        class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
                    @error('last_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                        class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm password"
                        required
                        class="w-full px-4 py-2.5 text-sm border border-gray-200 rounded-lg bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
                </div>

                <!-- Submit -->
                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold py-2.5 px-4 rounded-lg transition-colors duration-200 cursor-pointer">
                        Create Account
                    </button>
                </div>

            </form>

            <!-- Login Redirect -->
            <p class="text-center text-sm text-gray-400 mt-6">
                Already have an account?
                <a href="{{ url('login') }}" class="text-indigo-600 hover:text-indigo-700 font-medium transition-colors duration-200">Login</a>
            </p>
        </div>
    </div>
</div>
@endsection