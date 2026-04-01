@extends('master')
@section('title', 'Password Reset Email')
@section('content')

<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-md overflow-hidden">

            {{-- Header --}}
            <div class="bg-blue-600 px-6 py-4">
                <h3 class="text-white text-lg font-semibold">Password Reset Link</h3>
            </div>

            {{-- Body --}}
            <div class="px-6 py-8">
                <form action="{{ action('Auth\PasswordController@postEmail') }}" method="POST">
                    @csrf

                    {{-- Success Message --}}
                    @if (session()->has('flash_message'))
                        <div class="mb-4 px-4 py-3 bg-green-100 border border-green-400 text-green-800 rounded-lg">
                            {{ session()->get('flash_message') }}
                        </div>
                    @endif

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="mb-4 px-4 py-3 bg-red-100 border border-red-400 text-red-800 rounded-lg">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <p class="text-gray-600 text-sm mb-6">
                        Enter your email and we will send you a link to reset your password.
                    </p>

                    {{-- Email Field --}}
                    <div class="mb-4">
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Email address"
                            required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
                        >
                    </div>

                    {{-- Submit Button --}}
                    <div class="mb-2">
                        <button
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 cursor-pointer"
                        >
                            Send Password Reset Link
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection