<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Sentinel Auth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Basic Authentication with Sentinel and Laravel">
    <link rel="shortcut icon" href="img/favicon.ico">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- navbar-->
    <header class=" flex bg-white shadow">
        <nav class=" max-w-7xl px-4 sm:px-s lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600 hover:text-indigo-800"> Sentil Auth</a>
            

                <button class="md:hidden text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>  
                </button>
                <!-- Desktop Nav links-->
                <div class="hidden md:flex items-center space-x-6">
                    <li class="{{ set_active('/') }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ set_active('about') }}"> <a href="{{ url('about') }}">About</a></li>
                    <li class="{{ set_active('contact') }}"><a href="{{ url('contact') }}">Contact</a></li>
                    <li class="{{ set_active('userprotected') }}"><a href="{{ url('userprotected') }}">Registered Users Only</a></li>
                </div>

                <!--Auth Links -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ url('register') }}" class="text-gray-600 hover:text=indigo-600 font-medium transition">Register</a>
                    <a href="{{ url('login') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition font-medium">Login</a>
                    <a href="{{ url('profiles') }}" class="text-gray-600 hover:text-indigo-600 font-medium transition">My Profile</a>
                    <a href="{{ url('logout') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition font-medium">Logout</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer  class="mt-12 bg-white border-t py-6 text-center text-gray-400 text-sm">
        &copy; {{ date('Y') }}  My-Sentinel Auth. All rights reserved.
    </footer>


    
</body>
</html>