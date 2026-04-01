@extends('master')

@section('title', 'Register')

@section('content')
<div class="min-h-screen w-full bg-gray-50 flex  justify-center">

    <!-- Card Header -->
    <div class="flex flex-col max-w-4xl ">
        <div class="px-8 pb-8 mb-8 mt-8 text-center ">
            <h2 class="text-2xl font-bold text-gray-800">Create an account</h2>
            <p class="text-sm text-gray-400 ">
                Fill in the details below to get started
            </p>
        </div>

        <!-- Flash Message -->
        @if (session()->has('flash_message'))
            <div class="mx-8 mb-4 px-4 py-3 bg-green-50 border border-green-200 text-green-700 text-sm rounded-lg">
                {{ session()->get('flash_message') }}
            </div>
        @endif

        <!-- Form Body -->
        <div class=" flex flex-col-2 items-center max-w-3xl mx-auto">
            <form
                action="{{ route('registration.store') }}"
                method="POST"
                class="space-y-6 border border-gray-200 w-full  bg-white rounded-2xl"
            >
                @csrf

                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-md w-3/4">
                    <!-- Email -->
                    <div class=" block w-3/4 mx-auto items-center">
                        <p class="text-1xl">Email:</p>
                        <input
                            type="email"
                            name="email"
                            placeholder="Email address"
                            value="{{ old('email') }}"
                            required
                            class="w-full px-3  py-2 text-center text-black bg-gray-50 border border-gray-300 rounded-md shadow-sm  focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-green-300 transition-colors duration-200"
                        >
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- First Name -->
                    <div class="w-3/4 mx-auto">
                        <p class="text-1xl">First Name:</p>
                        <input
                            type="text"
                            name="first_name"
                            placeholder="First name"
                            value="{{ old('first_name') }}"
                            required
                            class="w-full px-3  py-2 text-black bg-gray-50 border border-gray-300 rounded-md shadow-sm  focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-green-300 transition-colors duration-200"
                        >
                        @error('first_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="w-3/4 mx-auto">
                        <p class="text-1xl">Last Name:</p>
                        <input
                            type="text"
                            name="last_name"
                            placeholder="Last name"
                            value="{{ old('last_name') }}"
                            required
                            class="w-full px-3  py-2 text-black bg-gray-50 border border-gray-300 rounded-md shadow-sm  focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-green-300 transition-colors duration-200"
                        >
                        @error('last_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="w-3/4 mx-auto">
                        <p class="text-1xl">Password:</p>
                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            required
                            class="w-full px-3  py-2 text-black  bg-gray-50 border border-gray-300 rounded-md shadow-sm  focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-green-300 transition-colors duration-200"
                        >
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="w-3/4 mx-auto">
                        <p class="text-1xl">Confirm Password:</p>
                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm password"
                            required
                            class="w-full px-3  py-2 text-black  bg-gray-50 border border-gray-300 rounded-md shadow-sm  focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-green-300 transition-colors duration-200"
                        >
                    </div>
                    <div class="mt-2 flex justify-center bg-green-400">
                        <button
                            type="submit"
                            class="mt-1 py-2 text-yellow-300"
                        >
                            Create Account
                        </button>
                    </div>
                </div>
                
            </form>
            <!-- Login Redirect -->
        </div>
        <p class="text-center text-sm text-gray-400 mt-4 -mb-5 ">
            Already have an account?
            <a href="{{ url('login') }}" class=" text-indigo-600 hover:text-indigo-700 font-medium">
                Login
            </a>
        </p>
    </div>
</div>
@endsection