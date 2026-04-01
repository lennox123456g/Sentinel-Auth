@extends('master')
@section('title', 'Password Reset')
@section('content')

<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-md overflow-hidden">

            {{-- Header --}}
            <div class="bg-blue-600 px-6 py-4">
                <h3 class="text-white text-lg font-semibold">Reset Password</h3>
            </div>

            {{-- Body --}}
            <div class="px-6 py-8">
                <form action="{{ action('Auth\PasswordController@postReset') }}" method="POST">
                    @csrf

                    {{-- Success Message --}}
                    @if (session()->has('flash_message'))
                        <div class="mb-4 px-4 py-3 bg-green-100 border border-green-400 text-green-800 rounded-lg">
                            {{ session()->get('flash_message') }}
                        </div>
                    @endif

                    {{-- Error Message --}}
                    @if (session()->has('error_message'))
                        <div class="mb-4 px-4 py-3 bg-red-100 border border-red-400 text-red-800 rounded-lg">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif

                    {{-- Email Field --}}
                    <div class="mb-4">
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Email address"
                            required
                            class="w-full px-4 py-2 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
                        >
                        @if ($errors->has('email'))
                            <p class="mt-1 text-red-500 text-xs">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    {{-- Password Field --}}
                    <div class="mb-4">
                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            required
                            class="w-full px-4 py-2 border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
                        >
                        @if ($errors->has('password'))
                            <p class="mt-1 text-red-500 text-xs">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    {{-- Password Confirmation Field --}}
                    <div class="mb-6">
                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm password"
                            required
                            class="w-full px-4 py-2 border {{ $errors->has('password_confirmation') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
                        >
                        @if ($errors->has('password_confirmation'))
                            <p class="mt-1 text-red-500 text-xs">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                    </div>

                    {{-- Hidden Token Field --}}
                    <input type="hidden" name="token" value="{{ $token }}">

                    {{-- Submit Button --}}
                    <div class="mb-2">
                        <button
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 cursor-pointer"
                        >
                            Reset Password
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection