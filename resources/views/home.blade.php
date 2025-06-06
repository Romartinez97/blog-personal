@extends('layouts.main')

@section('title', 'Inicio')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Todos los posts</h1>

  @forelse($posts as $post)
    <div class="mb-6 p-4 border rounded">
      <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
      <p class="text-sm text-gray-600">
        Categoría: 
        <a href="{{ route('categories.show', $post->category) }}" class="underline">
          {{ $post->category->name }}
        </a>
      </p>
      <p class="mt-2">{{ Str::limit($post->content, 150) }}</p>
    </div>
  @empty
    <p>No hay posts para mostrar.</p>
  @endforelse
@endsection
