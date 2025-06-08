<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bad Vibrations')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Metal+Mania&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-white font-sans">

    {{-- Navbar --}}
    <nav class="bg-gray-950 shadow px-6 py-4 ">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}"
                class="text-3xl font-bold font-metal text-white hover:scale-105 transition">Bad Vibrations</a>

            <div class="flex items-center space-x-4">
                <a href="{{ route('home') }}" class="text-white font-sans hover:scale-105 transition">Homepage</a>
                <a href="{{ route('category.index') }}"
                    class="text-white font-sans hover:scale-105 transition">Categories</a>

                @auth
                    <!-- Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="text-white hover:scale-105 transition focus:outline-none">
                            {{ Auth::user()->name }}
                        </button>

                        <div x-show="open" @click.away="open = false"
                            class="absolute right-0 mt-2 w-48 bg-gray-900 shadow rounded z-50">
                            <a href="{{ route('profile.edit') }}"
                                class="block px-4 py-2  text-white font-sans hover:scale-105 transition">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2  text-white font-sans hover:scale-105 transition">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-white font-sans hover:scale-105 transition">Log In</a>
                    <a href="{{ route('register') }}"
                        class="text-white font-sans hover:scale-105 transition">Sign Up</a>
                @endauth
            </div>
        </div>
    </nav>

    {{-- Contenido de la vista --}}
    <div class="container mx-auto px-4">
        @yield('content')
        {{ $slot ?? '' }}
    </div>

    {{-- Alpine.js para el dropdown --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>

</html>
