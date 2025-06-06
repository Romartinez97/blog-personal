{{-- resources/views/posts/show.blade.php --}}
@extends('layouts.main')

@section('title', $post->title)

@section('content')
  <div class="max-w-3xl mx-auto">

    {{-- Título --}}
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>

    {{-- Meta: categoría y fecha --}}
    <p class="text-sm text-gray-600 mb-6">
      Publicado en 
      <a href="{{ route('categories.show', $post->category) }}" class="underline text-indigo-600">
        {{ $post->category->name }}
      </a>
      • {{ $post->created_at->format('d M Y') }}
    </p>

    {{-- Poster (obligatorio) --}}
    <div class="mb-6">
      <img 
        src="{{ asset('storage/' . $post->poster) }}" 
        alt="Imagen de {{ $post->title }}"
        class="w-full rounded shadow"
      />
    </div>

    {{-- Contenido --}}
    <div class="prose prose-lg mb-8">
      {!! nl2br(e($post->content)) !!}
    </div>

    {{-- Enlace de regreso --}}
    <a href="{{ route('home') }}" class="text-indigo-600 hover:underline">
      ← Volver al listado
    </a>
  </div>
@endsection
