@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="max-w-4xl mx-auto bg-white text-black p-6 mt-10 rounded shadow flex gap-6">
        @if ($post->poster)
            <img src="{{ asset('storage/album-covers/' . $post->poster) }}" 
                alt="{{ $post->title }}' album cover"
                class="w-[250px] h-[250px] object-cover rounded">
        @endif

        <div class="flex-1">
            <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>

            <p class="text-black mb-4">
                Categoría: 
                <a href="{{ route('category.show', $post->category) }}" class="underline">
                    {{ $post->category->name }}
                </a>
            </p>

            <x-rating-stars :rating="$post->rating" />

            <div class="pt-3">
                {{ $post->content }}
            </div>
        </div>
    </div>
@endsection
