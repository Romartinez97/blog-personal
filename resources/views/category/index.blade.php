@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1 class="text-3xl font-bold mb-6 mt-5 text-black">Categories</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($categories as $category)
            <a href="{{ route('category.show', $category) }}"
            class="block p-6 bg-white rounded-lg shadow hover:shadow-md hover:scale-105 transition-transform duration-200"
            >
                <h2 class="text-lg font-semibold text-black">{{ $category->name }}</h2>
            </a>
        @endforeach
    </div>
@endsection