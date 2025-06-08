@extends('layouts.app')

@section('title', 'BAD VIBRATIONS')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-black mt-5">Album reviews</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @forelse($posts as $post)
            <x-post-card :post="$post" />
        @empty
            <p>There are no reviews to show</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
@endsection
