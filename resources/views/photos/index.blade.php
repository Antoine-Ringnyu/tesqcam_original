<x-app-layout>
    <div class="p-8 max-w-xl mx-auto">
        <h1 class="text-3xl font-semibold mb-4">Unsplash Photo App</h1>
        <form action="{{ route('photos.search') }}" method="GET" class="mb-4">
            <input type="text" name="keyword" placeholder="Enter keyword" class="p-2 border rounded">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Search</button>
        </form>
        <hr class="my-4">
    
        @isset($photos)
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($photos as $photo)
                <div class="border p-4 mb-2">
                    <img src="{{ $photo['urls']['regular'] }}" alt="Unsplash Photo" class="w-full rounded mb-2">
                    <p class="font-semibold mb-1">{{ $photo['user']['name'] }}</p>
                    <a href="{{ $photo['urls']['full'] }}" class="bg-blue-500 text-white px-3 py-1 rounded block text-center hover:bg-blue-600" download="{{ $photo['alt_description'] ?? 'unsplash-photo' }}">Download</a>
                </div>
            @endforeach
        </div>
        @endisset
    
        <div class="mt-4">
            @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
