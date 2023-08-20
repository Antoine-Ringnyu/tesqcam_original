@props([
    'src' => 'default-image.jpg', // Default image source
    'name' => 'John Doe',         // Default name
    'comment' => 'No comment',    // Default comment
])

<div class="flex flex-col gap-4 max-w-xs w-full sm:w-1/2 md:w-1/4  border border-gray-200 transition border-opacity-60 hover:border-opacity-100 hover:border-slate-800 rounded-md overflow-hidden shadow-md">
    <div class="overflow-hidden rounded-md shadow-md max-h-40">
        <img class="block object-cover object-center " src="{{ $src }}" alt="Smiling Teacher">
    </div>
    <div class="px-2">
        <div class="flex justify-between items-center">
            <h1 class="font-bold mb-1">{{ $name }}</h1>
            <span class="hidden text-xs font-thin pr-6">read more</span>
        </div>
        <p class="text-gray-600 text-sm">
            {{ $comment }}
        </p>
    </div>
    {{ $slot }}
</div>