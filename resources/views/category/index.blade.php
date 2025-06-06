@extends('layouts.app')

@section('title', 'Categorías')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Categorías</h1>
    <ul class="list-disc ml-6">
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category) }}" class="text-indigo-600 hover:underline">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
