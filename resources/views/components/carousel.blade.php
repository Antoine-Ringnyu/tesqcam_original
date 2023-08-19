<div x-data="{
        images: [
            '{{ asset('images/Caroselle/boys smilling.jpg') }}',
            '{{ asset('images/Caroselle/primary pupils.jpg') }}'
        ],
        activeImage: 0,
        nextImage() {
            this.activeImage = (this.activeImage + 1) % this.images.length;
        },
        prevImage() {
            this.activeImage = (this.activeImage - 1 + this.images.length) % this.images.length;
        }
    }">
    <div class="block relative flex-1 max-w-3xl max-h-80 mx-auto overflow-hidden">
        <template x-for="(image, index) in images" :key="index">
            <img
                x-show="index === activeImage"
                class="absolute w-full h-full top-0 left-0 object-cover object-center transition-opacity duration-500"
                :src="image"
                alt="Image"
            >
        </template>
        <button @click="prevImage" class="absolute left-0 top-1/2 transform -translate-y-1/2 px-2 py-1 bg-gray-800 text-white rounded-r-lg shadow-md">
            Previous
        </button>
        <button @click="nextImage" class="absolute right-0 top-1/2 transform -translate-y-1/2 px-2 py-1 bg-gray-800 text-white rounded-l-lg shadow-md">
            Next
        </button>
    </div>
</div>
