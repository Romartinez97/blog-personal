@props(['post'])

<a href="{{ route('posts.show', $post) }}"
    class="bg-white rounded-lg shadow overflow-hidden w-[300px] hover:scale-105 transition-transform duration-200"> 


    @if ($post->poster)
        <img src="{{ asset('storage/album-covers/' . $post->poster) }}"
            alt="{{ $post->title }}'s album cover"
            class="w-full object-cover"> 
    @else
        <div class="w-full h-48 bg-white flex items-center justify-center text-black">
            No image available
        </div>
    @endif

    <div class="p-4">
        <h2 class="text-lg font-bold text-black pb-1">{{ $post->title }}</h2>
        <h4 class="text-g font-bold text-black pb-1">{{ $post->artist }}</h4>
        <p class="text-sm text-black pb-1">Category: {{ $post->category->name }}</p>
        <x-rating-stars :rating="$post->rating" />
    </div>
</a>
