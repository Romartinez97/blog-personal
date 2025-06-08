@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <h1 class="text-3xl font-bold text-black mt-5 mb-6">{{ $category->name }} reviews</h1>

    @if ($posts->isEmpty())
        <p class="text-black text-xl mb-6">
            There are no {{ $category->name }} reviews so far, come back later!
        </p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
    @endif
@endsection
