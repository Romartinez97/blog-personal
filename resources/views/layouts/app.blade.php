<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Personal')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-white shadow px-6 py-4 mb-8">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600">Mi Blog</a>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="text-gray-800 hover:text-indigo-600">Inicio</a>
                <a href="{{ url('/category') }}" class="text-gray-800 hover:text-indigo-600">Categorías</a>
                <a href="{{ url('/auth/login') }}" class="text-gray-800 hover:text-indigo-600">Login</a>
                <a href="{{ url('/logout') }}" class="text-gray-800 hover:text-indigo-600">Logout</a>
            </div>
        </div>
    </nav>

    <header></header>
    <main class="container mx-auto px-6">
        @yield('content')
    </main>
    <footer></footer>
</body>

</html>
