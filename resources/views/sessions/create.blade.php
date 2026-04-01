@extends('master')

@section('title','Login')

@section('content')
    <div class="min-h-screen bg-gray-800 flex flex-col items-center justify-center">
        <div>
            <h3 class="text-5xl font-bold text-center text-red-700 mb-6">Log In</h3>  
        </div>
        <form method="POST" action="{{ route('sessions.store') }}" class="mt-10 rounded-md bg-black">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <input type="email"
                name="email"
                placeholder="Email"
                value="{{old('email') }}"
                class="w-full px-3  py-2 text-center text-black bg-gray-50 border border-gray-300 rounded-md shadow-sm  focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-green-300 transition-colors duration-200"
                required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                
            </div>
            <!-- Password -->
            <div class="mb-4">
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Password"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
                    required
                >
                @if($errors->has('password'))
                    <p class="text-red-500 text-sm mt-1">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="mb-6">
                <label class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" name="remember" class="rounded">
                    Remember me
                </label>
            </div>

            <!-- Submit -->
            <button type="submit"
            class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded transition duration-200">
                Login
            </button>

        </form>

        <div class="text-center mt-6 text-sm text-gray-500 space-y-2">
            <a href="{{ url('forgot_password') }}" class="text-green-500 hover:underline"> Forgaot Password ?</a>

            <div class="bg-gray-50 rounded p-3 text-left text-xs text-gray-500">
                <p><strong>Standard User:</strong> user@user.com</p>
                <p><strong>Password:</strong> sentineluser</p>
                <p class="mt-1"><strong>Admin User:</strong> admin@admin.com</p>
                <p><strong>Password:</strong> sentineladmin</p>
            </div>
        </div>
       
    </div>
@endsection



