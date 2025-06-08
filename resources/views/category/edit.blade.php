@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Editar Categoría: {{ $category->name }}</h1>

    <form method="POST" action="{{ route('category.update', $category) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="name" value="{{ old('name', $category->name) }}"
                class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            Guardar Cambios
        </button>
    </form>
@endsection
