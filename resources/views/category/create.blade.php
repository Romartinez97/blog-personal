@extends('layouts.app')

@section('title', 'Crear Categoría')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Crear nueva categoría</h1>

    <form method="POST" action="{{ route('category.store') }}" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                required>
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            Crear
        </button>
    </form>
@endsection
