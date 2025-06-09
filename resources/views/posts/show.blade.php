@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="max-w-4xl mx-auto bg-white text-black p-6 mt-10 rounded shadow flex gap-6">
        @if ($post->poster)
            <img src="{{ asset('storage/album-covers/' . $post->poster) }}" alt="{{ $post->title }}' album cover"
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

    <div class="mt-8 border-t pt-8">
        <h2 class="text-2xl font-bold text-black mb-4">Comments</h2>

        @auth
            <form action="{{ route('comments.store', $post) }}" method="POST" class="mb-6">
                @csrf
                <textarea name="content" rows="3" class="w-full border rounded p-2 text-black"
                    placeholder="Write your comment..." required></textarea>
                <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Leave a comment
                </button>
            </form>
        @else
            <p class="mb-6 text-gray-600">
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Log in</a>
                or
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">sign in</a>
                to join the conversation.
            </p>
        @endauth

        <div class="space-y-4">
            @foreach ($post->comments()->latest()->get() as $comment)
                <div class="bg-gray-50 text-gray-800 p-4 rounded">
                    <div class="flex justify-between items-start">
                        <div class="font-semibold">{{ $comment->user->name }}</div>
                        <div class="text-sm text-gray-500">
                            {{ $comment->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <p class="mt-2 text-gray-700">{{ $comment->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
