@props([
    'src',
    'title',
    'caption',
])

<div {{ $attributes->merge(['class' => 'max-w-xs mx-auto border sm:border-none']) }}>
    <div class="sm:w-24 sm:h-24 w-32 h-32 p-2 border bg-white shadow-md mx-auto rounded-full overflow-hidden">
        <img class="w-full block object-cover" src="{{ $src }}" alt="image here">
    </div>
    <h2 class="mt-3 font-semibold md:text-base">{{ $title }}</h2>
    <p class="text-gray-400 sm:text-sm">
        {{ $caption }}
    </p>
</div>