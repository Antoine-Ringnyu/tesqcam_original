<x-app-layout>
    <div class="max-w-7xl mx-auto  text-sm sm:text-base text-gray-800 dark:text-gray-200">

       {{-- the hero section --}}
        <div class="">
            <div class="sm:py-12 text-center ">
                <div class="sm:flex items-center w-full py-8">
                    <div class="flex-1 text-5xl font-bold border-b-2 sm:border-b-0 sm:border-r-4 sm:text-6xl md:text-7xl xl:text-9xl md:text-right px-2 py-8">Program</div>
                    <div class="flex-1 ">
                        <div class="max-w-sm px-2 sm:text-left mt-4 sm:mt-0 mx-auto sm:mx-0">
                            <div class="text-base font-semibold sm:text-lg md:text-2xl">Turtor Exam Qestions Cameroon</div>
                            <div class="dark:text-gray-400 text-sm sm:text-base text-gray-600 md:text-lg font-thin pt-2" >we invest in you, your success is our prority that is why we value you</div>
                        </div>
                    </div>
                </div>
                {{-- <x-secondary-button class="text-center px-12 rounded-3xl mb-16">Home</x-secondary-button> --}}
            </div>
        </div>
    
        {{-- the section breaker --}}
        {{-- <x-line class="py-0 my-0"/> --}}

        {{-- the program section --}}
        <div class="relative overflow-auto dark:bg-dark-700 pb-10">
            <div class="relative lg:flex lg:items-start border-t dark:border-gray-800">
                <aside class="hidden fixed top-0 bottom-0 left-0 z-20 h-full w-16 bg-gradient-to-b from-gray-100 to-white transition-all duration-300 overflow-hidden lg:sticky lg:w-80 lg:shrink-0 lg:flex lg:flex-col lg:justify-end lg:items-end 2xl:max-w-lg 2xl:w-full dark:from-gray-800 dark:to-dark-700">
                   <div class="relative min-h-0 flex-1 flex flex-col xl:w-80">
                        <a class="flex items-center py-8 px-4 lg:px-8 xl:px-16" href="#">
                            <img class="w-8 h-8 shrink-0 transition-all duration-300 lg:w-12 lg:h-12" src="{{ asset('images/icons/puzzle.png') }}" 
                            alt="TesqCam" 
                            width="50" 
                            height="52"
                            >
                            <img class="hidden ml-4 lg:block" 
                            src="{{ asset('images/logo.png') }}" 
                            alt="TesqCam"
                            width="114"
                            height="29"
                            >
                        </a>

                        <div class="overflow-y-auto overflow-x-hidden px-4 lg:overflow-hidden lg:px-8 xl:px-16">
                            <nav class="hidden lg:block lg:mt-4">
                                <div class="docs_sidebar">

                                    <ul class="space-y-6">

                                        <div>
                                            <div x-data="{ 
                                                activeAccordion: '', 
                                                setActiveAccordion(id) { 
                                                    this.activeAccordion = (this.activeAccordion == id) ? '' : id 
                                                } 
                                            }" class="relative w-full mx-auto overflow-hidden text-sm font-normal  divide-gray-200 rounded-md">
                                                @foreach ($categoriesWithDepartmentsAndCourses as $category)
                                                <div x-data="{ id: $id('accordion_{{ $loop->index }}') }" class="cursor-pointer group">
                                                    <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                                                        <span>{{ $category->category }}</span>
                                                        <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </button>
                                                    <div x-show="activeAccordion==id" x-collapse x-cloak>
                                                        <ul class="space-y-2 mt-2">
                                                            @foreach ($category->departments as $department)
                                                            <li class="group">
                                                                <h3 class="font-thin text-base pl-6 transition-colors duration-300 group-hover:text-blue-600">{{ $department->department }}</h3>
                                                                {{-- <ul class="list-disc pl-8">
                                                                    @foreach ($department->courses as $course)
                                                                    <li class="transition-colors duration-300 group-hover:text-green-500">{{ $course->course }}</li>
                                                                    @endforeach
                                                                </ul> --}}
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        

                                        {{-- @foreach ($categoriesWithDepartmentsAndCourses as $category)
                                        <li class="group">
                                            <h2 class="font-bold text-lg uppercase border-t dark:border-gray-600 transition-all duration-300 transform group-hover:scale-105">{{ $category->category }}</h2>
                                            <ul class="space-y-2 mt-2">
                                                @foreach ($category->departments as $department)
                                                <li class="group">
                                                    <h3 class="font-thin text-base pl-6 transition-colors duration-300 group-hover:text-blue-600">{{ $department->department }}</h3>
                                                    <ul class="list-disc pl-8">
                                                        @foreach ($department->courses as $course)
                                                        <li class="transition-colors duration-300 group-hover:text-green-500">{{ $course->course }}</li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach --}}
                                    </ul>
                                    
                                </div>
                            </nav>

                            <div class="mt-4 px-3 py-2 border-dashed border-gray-200 border rounded-lg text-xs leading-loose text-gray-700 lg:block dark:border-gray-400 dark:text-gray-200">
                                <span class="font-medium">Laravel Forge:</span> create and manage PHP 8 servers. Deploy your Laravel applications in seconds. <a class="underline text-red-600" href="https://forge.laravel.com">Sign up now!</a>.
                            </div>
                        
                        </div>
                   </div>
                </aside>
                {{-- the header navigation here --}}
                {{-- <header class="lg:hidden">
                    <div class="relative mx-auto w-full py-10 bg-white transition duration-200 dark:bg-dark-700">
                        <div class="mx-auto px-8 sm:px-16 flex items-center justify-between">
                            <a class="flex items-center" href="#">
                                <img class="" 
                                src="{{ asset('images/icons/puzzle.png') }}" 
                                alt="TesqCam" 
                                width="50" 
                                height="52"
                                >
                                <img class="hidden ml-5 sm:block" 
                                src="{{ asset('images/logo.png') }}" 
                                alt="TesqCam"
                                width="114"
                                height="29"
                                >
                            </a>
                            <div class="flex-1 flex items-center justify-end">
                                <button class="relative w-10 h-10 focus:outline-none focus:shadow-outline text-gray-500">questions or answers</button>
                                <button class="ml-2 relative w-10 h-10 p-2 text-red-600 lg:hidden focus:outline-none focus:shadow-outline">year for question</button>
                            </div>
                        </div>
                    </div>
                    <div></div>
                </header> --}}

                <header class="lg:hidden">
                    <div class="relative mx-auto w-full py-10 bg-white transition duration-200 dark:bg-gray-700">
                        <div class="mx-auto px-8 sm:px-16 flex items-center justify-between">
                            <a href="/" class="flex items-center">
                                <img class="" src="{{ asset('images/logo.pnj') }}" alt="Laravel">
                                <img class="hidden ml-5 sm:block" src="/img/logotype.min.svg" alt="Laravel">
                            </a>
                            <div class="flex-1 flex items-center justify-end">

                                <button class="ml-2 relative w-10 h-10 p-2 text-red-600 lg:hidden focus:outline-none focus:shadow-outline">
                                    <svg x-show="! navIsOpen" x-transition.opacity="" class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                    <svg x-show="navIsOpen" x-transition.opacity="" class="absolute inset-0 mt-2 ml-2 w-6 h-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>

                {{-- section --}}
                <section class="flex-1 dark:bg-dark-700">
                    <div class="max-w-screen-lg px-8 sm:px-16 lg:px-24">
                        <div class="flex flex-col items-end border-b border-gray-200 py-1 transition-colors dark:border-gray-700 lg:mt-8 lg:flex-row-reverse">

                            <div class="w-full lg:w-40 lg:pl-6">
                                <div>
                                    <label class="text-gray-600 text-xs tracking-widest uppercase dark:text-gray-400" for="version-switcher">Year</label>
                                    <div class="relative w-full transition-all duration-500 focus-within:border-gray-600 bg-inherit ">
                                        <select class="appearance-none flex-1 w-full px-0 py-1 placeholder-gray-900 tracking-wide bg-inherit dark:bg-inherit focus:outline-none dark:bg-dark-700 dark:text-gray-400 dark:placeholder-gray-500 border-none">
                                            <option value="#">Master</option>
                                            <option selected="" value="">10.x</option>
                                            <option value="#">2023</option>
                                            <option value="#">2023</option>
                                            <option value="#">2023</option>
                                            <option value="#">2023</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="w-full lg:w-52 lg:px-1">
                                <div>
                                    {{-- <label class="text-gray-600 text-xs tracking-widest uppercase dark:text-gray-500" for="version-switcher">...............</label> --}}
                                    <div class="font-bold relative w-full transition-all duration-500 focus-within:border-gray-600  dark:bg-inherit">
                                        <select class="appearance-none flex-1 w-full px-0 py-1 placeholder-gray-900 tracking-wide focus:outline-none bg-inherit dark:bg-inherit dark:text-gray-400 dark:placeholder-gray-500 border-none">
                                            <option value="#">Both</option>
                                            <option selected="" value="">Answers</option>
                                            <option value="#">Questions</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="relative mt-8 flex items-center justify-end w-full h-10 lg:mt-0">
                                <div class="flex-1 flex items-center">
                                    Search
                                </div>
                            </div>
                        </div>

                        <section class="mt-8 md:mt-16">
                            <section class="max-w-prose">
                                
                                <div id="main-content">
                                    <h1>Laravel Documentation</h1>
                                    <p>You can find the online version of the Laravel documentation at <a href="https://laravel.com/docs">https://laravel.com/docs</a></p>
                                    <h2>Contribution Guidelines</h2>
                                    <p>If you are submitting documentation for the <strong>current stable release</strong>, submit it to the corresponding branch. For example, documentation for Laravel 10 would be submitted to the <code>10.x</code> branch. Documentation intended for the next release of Laravel should be submitted to the <code>master</code> branch.</p>
                                </div>

                            </section>
                        </section>
                    </div>
                </section>

            </div>
        </div>


         {{-- the section breaker --}}
         <x-line/>


        {{-- the image slider section --}}
        
        <div class="max-w-7xl overflow-hidden shadow-md my-8">
            <div class="flex flex-col items-center gap-8 py-8 shadow-xl">
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-semibold">The Team: A Family</h1>
                <div>
                    <div x-data="{
                        imageGalleryOpened: false,
                        imageGalleryActiveUrl: null,
                        imageGalleryImageIndex: null,
                        imageGallery: [
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-01.jpeg',
                                'alt': 'Photo of Mountains'
                            },
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-02.jpeg',
                                'alt': 'Photo of Mountains 02'
                            },
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-03.jpeg',
                                'alt': 'Photo of Mountains 03'
                            },
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-04.jpeg',
                                'alt': 'Photo of Mountains 04'
                            },
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-05.jpeg',
                                'alt': 'Photo of Mountains 05'
                            },
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-06.jpeg',
                                'alt': 'Photo of Mountains 06'
                            },
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-07.jpeg',
                                'alt': 'Photo of Mountains 07'
                            },
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-08.jpeg',
                                'alt': 'Photo of Mountains 08'
                            },
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-09.jpeg',
                                'alt': 'Photo of Mountains 09'
                            },
                            {
                                'photo': 'https://cdn.devdojo.com/images/june2023/mountains-10.jpeg',
                                'alt': 'Photo of Mountains 10'
                            }
                        ],
                        imageGalleryOpen(event) {
                            this.imageGalleryImageIndex = event.target.dataset.index;
                            this.imageGalleryActiveUrl = event.target.src;
                            this.imageGalleryOpened = true;
                        },
                        imageGalleryClose() {
                            this.imageGalleryOpened = false;
                            setTimeout(() => this.imageGalleryActiveUrl = null, 300);
                        },
                        imageGalleryNext(){
                            this.imageGalleryImageIndex = (this.imageGalleryImageIndex == this.imageGallery.length) ? 1 : (parseInt(this.imageGalleryImageIndex) + 1);
                            this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
                        },
                        imageGalleryPrev() {
                            this.imageGalleryImageIndex = (this.imageGalleryImageIndex == 1) ? this.imageGallery.length : (parseInt(this.imageGalleryImageIndex) - 1);
                            this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
                            
                        }
                    }" 
                    @image-gallery-next.window="imageGalleryNext()" 
                    @image-gallery-prev.window="imageGalleryPrev()" 
                    @keyup.right.window="imageGalleryNext();" 
                    @keyup.left.window="imageGalleryPrev();"
                    class="w-full h-full select-none">
                    <div class="max-w-6xl mx-auto duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                        <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                            <template x-for="(image, index) in imageGallery">
                                <li><img x-on:click="imageGalleryOpen" :src="image.photo" :alt="image.alt" :data-index="index+1" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"></li>
                            </template>
                        </ul>
                    </div>
                    <template x-teleport="body">
                        <div 
                            x-show="imageGalleryOpened" 
                            x-transition:enter="transition ease-in-out duration-300" 
                            x-transition:enter-start="opacity-0" 
                            x-transition:leave="transition ease-in-in duration-300" 
                            x-transition:leave-end="opacity-0" 
                            @click="imageGalleryClose" 
                            @keydown.window.escape="imageGalleryClose" 
                            x-trap.inert.noscroll="imageGalleryOpened"
                            class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out" x-cloak>
                            <div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12"> 
                                <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')" class="absolute left-0 flex items-center justify-center text-white translate-x-10 rounded-full cursor-pointer xl:-translate-x-24 2xl:-translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                                </div>
                                <img 
                                    x-show="imageGalleryOpened" 
                                    x-transition:enter="transition ease-in-out duration-300" 
                                    x-transition:enter-start="opacity-0 transform scale-50" 
                                    x-transition:leave="transition ease-in-in duration-300" 
                                    x-transition:leave-end="opacity-0 transform scale-50" 
                                    class="object-contain object-center w-full h-full select-none cursor-zoom-out" :src="imageGalleryActiveUrl" alt="" style="display: none;">
                                <div @click="$event.stopPropagation(); $dispatch('image-gallery-next');" class="absolute right-0 flex items-center justify-center text-white -translate-x-10 rounded-full cursor-pointer xl:translate-x-24 2xl:translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                </div>
            </div>
        </div>

        <div class=" bg-slate-800 dark:bg-gray-300 text-gray-300 dark:text-gray-600">
            <div class="max-w-2xl flex flex-col mx-auto text-xs font-thin py-12">
                <div class="sm:flex justify-center items-center">
                    <div class="max-w-xs flex items-center mx-auto rev">
                        <div class="  order-1">
                            <p class="text-right p-2">
                                Proin ex ipsum, facilisis id tincidunt sed, vulputate in lacus. Donec pharetra faucibus leo, vitae leo scelerisque eu. Nam enim dolor, porta at ex ut, eleifend tristique metus. Integer sit amet 
                            </p>
                        </div>
                        <div class="w-1/3 order-2">
                            <div class="flex justify-center items-center overflow-hidden rounded-lg border h-24 w-24 bg-gray-100 text-gray-900">
                                <h1 class="text-base font-semibold">TesqCam</h1>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-xs flex items-center mx-auto">
                        <div class="  order-2">
                            <p class="text-left p-2">
                                Proin ex ipsum, facilisis id tincidunt sed, vulputate in lacus. Donec pharetra faucibus leo, vitae leo scelerisque eu. Nam enim dolor, porta at ex ut, eleifend tristique metus. Integer sit amet 
                            </p>
                        </div>
                        <div class="w-1/3 order-1">
                            <div class="flex justify-center items-center overflow-hidden rounded-lg border h-24 w-24 bg-gray-100 text-gray-900">
                                <h1 class="text-base font-semibold">TesqCam</h1>
                            </div>
                        </div>
                    </div>
               </div>
    
               <div class="sm:flex ">
                    <div class="max-w-xs flex items-center mx-auto">
                        <div class="">
                            <p class="text-right p-2">
                                Proin ex ipsum, facilisis id tincidunt sed, vulputate in lacus. Donec pharetra faucibus leo, vitae leo scelerisque eu. Nam enim dolor, porta at ex ut, eleifend tristique metus. Integer sit amet 
                            </p>
                        </div>
                        <div class="w-1/3 ">
                            <div class="flex justify-center items-center overflow-hidden rounded-lg border h-24 w-24 bg-gray-100 text-gray-900">
                                <h1 class="text-base font-semibold">TesqCam</h1>
                            </div>
                        </div>
                    </div>
    
                    <div class="max-w-xs flex items-center mx-auto">
                        <div class=" order-2">
                            <p class="text-left p-2">
                                Proin ex ipsum, facilisis id tincidunt sed, vulputate in lacus. Donec pharetra faucibus leo, vitae leo scelerisque eu. Nam enim dolor, porta at ex ut, eleifend tristique metus. Integer sit amet 
                            </p>
                        </div>
                        <div class="w-1/3 order-1">
                            <div class="flex justify-center items-center overflow-hidden rounded-lg border h-24 w-24 bg-gray-100 text-gray-900">
                                <h1 class="text-base font-semibold">TesqCam</h1>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
    
    
            <div class="text-center  pb-20">
                <p>© 2023 Howard-Center. All rights reserved</p>
            </div>
        </div>

    </div>

</x-app-layout>

