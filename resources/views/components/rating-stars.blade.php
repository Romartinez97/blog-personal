@props(['rating' => 0])

<div class="flex items-center text-yellow-500">
    @for ($i = 1; $i <= 5; $i++)
        @if ($i <= $rating)
            {{-- Estrella completa --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                <path
                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.955L10 0l2.95 5.955 6.562.955-4.756 4.635 1.122 6.545z" />
            </svg>
        @elseif ($i - 0.5 <= $rating)
            {{-- Media estrella --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                <defs>
                    <linearGradient id="halfGradient">
                        <stop offset="50%" stop-color="currentColor" />
                        <stop offset="50%" stop-color="transparent" />
                    </linearGradient>
                </defs>
                <path fill="url(#halfGradient)"
                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.955L10 0l2.95 5.955 6.562.955-4.756 4.635 1.122 6.545z" />
            </svg>
        @endif
    @endfor
</div>
