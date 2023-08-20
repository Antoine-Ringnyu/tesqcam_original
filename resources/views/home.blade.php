<x-app-layout>
{{-- <x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
{{ __('Home') }}
</h2>
</x-slot> --}}


{{-- the line  --}}
{{-- <div class="flex justify-between py-2">
    <div class="w-12 border-b"></div>
    <div class="w-12 border-b"></div>
</div> --}}

<div class="max-w-5xl mx-auto p-4 sm:p-6 lg:p-8 text-sm sm:text-base" >

    {{-- the hero section --}}
    <x-header 
        class="sm:py-12 lg:py-24 "
        title="tesqcam" 
        subTitle="this is the sub" 
        caption="this is all i have to say aboubt this project and it is the best thing that" >
        <x-secondary-button class="text-center px-12 rounded-3xl mb-16">Home</x-secondary-button>
    </x-header>
    {{-- the section breaker --}}
    <x-line/>
 
    {{-- the product and service section --}}
    <x-baner/>
    {{-- the section breaker --}}
    <x-line/>

    {{-- questions and solution action section --}}
    <div class="sm:flex  items-center justify-center gap-4 sm:px-10 w-full md:py-6 ">
        <div class="sm:border-l-4 sm:pl-2 sm:py-4 sm:w-2/5 md:flex-1">
            <h1 class="text-center sm:text-left text-4xl font-thin sm:pb-4  py-8 sm:text-5xl lg:text-7xl md:text-center text-gray-800 dark:text-gray-200">Questions <span class="font-bold text-sm block sm:pl-20 ">&</span> Solutions</h1>
            <p class="text-gray-600 dark:text-gray-400 sm:text-sm hidden sm:block sm:pl-1">
                we invest in you, your success is our prority that is why we value you in all the fiels and cathegories get your questions in the following field of studies including GCE, Concours,, HND, Degree, Masters and get set for exellenc
            </p>
        </div>
        <div class="flex flex-col gap-4 sm:w-3/5 md:flex-1 py-4 pb-8 text-gray-800 dark:text-gray-200">
            
            @foreach($categories as $category)
            
                <h1 class="font-light uppercase text-xl"></h1>
                {{-- gce questions and answers --}}
                <a class="w-fit mx-auto" href="{{ route('home') }}">
                    <div class="flex items-center  w-fit  ">
                        <x-secondary-button class="flex items-center justify-center gap-2
                        ">
                        <div class="w-16 h-16 border-2 rounded-full flex justify-center items-center uppercase font-extrabold overflow-hidden">
                            {{ $category->category }}
                          </div>
                          
                            <div class="max-w-xs text-left">
                                <h1 class="font-bold uppercase">{{ $category->category }} <span>examination</span></h1>
                                <p class="text-gray-400 dark:text-gray-500 normal-case pt-1">
                                    you get your questions either in GCE/A or GCE/O in either arts or sciences
                                </p>
                            </div>
                        </x-secondary-button>
                    </div>
                </a
            @endforeach
            </div>
        </div>      
    </div>

    {{-- the section breaker --}}
    <x-line/>

    {{-- the carrosell section --}}
    <div class="flex flex-col gap-8 py-4 text-center sm:px-10  lg:px-28  xl:px-36">
        {{-- carosell image --}}
        <x-carousel/>
        
        <div class=" text-gray-800 dark:text-gray-400 text-xs lg:flex flex-1">
            <div class="py-2 max-w-xs mx-auto border-b-4 lg:border-none">
                <h1 class="text-gray-800 dark:text-gray-200 font-extrabold text-lg">
                    <x-login-form/>
                </h1>
                <p>I already have an account</p>
            </div>
            <div class="flex flex-col gap-2 py-2 max-w-xs mx-auto border-b-4 lg:border-none ">
                <p>Notify me about anything new</p>
                <div>
                    <input class="block w-full rounded-md mx-auto" type="email" name="email" id="mail">
                    <x-primary-button class="mt-3">Subscribe</x-primary-button>
                </div>
            </div>
            <div class="py-2 max-w-xs mx-auto border-b-4 lg:border-none">
                <h1 class="text-gray-800 dark:text-gray-200 font-extrabold text-lg">
                    <div>
                        <div x-data="{ modalOpen: false }"
                            @keydown.escape.window="modalOpen = false"
                            :class="{ 'z-40': modalOpen }" class="relative w-auto h-auto">
                            <button @click="modalOpen=true" class="hover:underline hover:text-xl">Register</button>
                            <template x-teleport="body">
                                <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                                    <div x-show="modalOpen"
                                        x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in duration-300"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-white backdrop-blur-sm bg-opacity-70"></div>
                                    <div x-show="modalOpen"
                                        x-trap.inert.noscroll="modalOpen"
                                        x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0 -translate-y-2 sm:scale-95"
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="ease-in duration-200"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave-end="opacity-0 -translate-y-2 sm:scale-95"
                                        class="relative w-full py-6 bg-white border shadow-lg px-7 border-neutral-200 sm:max-w-lg sm:rounded-lg">
                                        <div class="flex items-center justify-between pb-3">
                                            <h3 class="text-lg font-semibold">Modal Title</h3>
                                            <button @click="modalOpen=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>  
                                            </button>
                                        </div>
                                        <div class="relative w-auto pb-8">
                                            <p>This is placeholder text. Replace it with your own content.</p>
                                        </div>
                                        <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
                                            <button @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2">Cancel</button>
                                            <button @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-900">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </h1>
                <p>I do not have and account yet</p>
            </div>
        </div>
    </div>

    {{-- the section breaker --}}
    <x-line/>

    {{-- testimonials section --}}
<div class="py-12 text-gray-800 dark:text-gray-200">
    <h1 class="mb-16 text-center text-4xl font-thin sm:text-5xl lg:text-6xl">Testimonials</h1>
    <div class="flex flex-wrap justify-center gap-8">
        <!-- Adjusted column width for md and above screens -->
        <div class="flex flex-col gap-4 max-w-xs w-full sm:w-1/2 md:w-1/4  border border-gray-200 transition border-opacity-60 hover:border-opacity-100 hover:border-slate-800 rounded-md overflow-hidden">
            <div class="overflow-hidden rounded-md shadow-md">
                <img class="block object-cover" src="{{ asset('images/caroselle/smilling teacher.jpg') }}" alt="Smiling Teacher">
            </div>
            <div>
                <div class="flex justify-between items-center">
                    <h1 class="font-bold mb-1">Angel Michel</h1>
                    <span class="text-xs font-thin pr-6">read more</span>
                </div>
                <p class="text-gray-600 text-sm">
                    I already have an account the day I set sight in TESQCAM. My results have drastically increased or .
                </p>
            </div>
        </div>

        <!-- Repeat the above div for other testimonials -->
        <div class="flex flex-col gap-4 max-w-xs w-full sm:w-1/2 md:w-1/4 border border-gray-200 transition border-opacity-60 hover:border-opacity-100 hover:border-slate-800 rounded-md overflow-hidden">
            <div class="overflow-hidden rounded-md shadow-md">
                <img class="block object-cover" src="{{ asset('images/Caroselle/smilling teacher.jpg') }}" alt="Smiling Teacher">
            </div>
            <div>
                <h1 class="font-bold mb-1">Another Person</h1>
                <p class="text-gray-600 text-sm">
                    Testimonial content goes here.
                </p>
            </div>
        </div>

        <!-- Repeat the above div for other testimonials -->
        <div class="flex flex-col gap-4 max-w-xs w-full sm:w-1/2 md:w-1/4  border border-gray-200 transition border-opacity-60 hover:border-opacity-100 hover:border-slate-800 rounded-md overflow-hidden">
            <div class="overflow-hidden rounded-md shadow-md">
                <img class="block object-cover" src="{{ asset('images/Caroselle/smilling teacher.jpg') }}" alt="Smiling Teacher">
            </div>
            <div>
                <h1 class="font-bold mb-1">Another Person</h1>
                <p class="text-gray-600 text-sm">
                    Testimonial content goes here.
                </p>
            </div>
        </div>
        
        <!-- End of repetition -->
    </div>
</div>

    
    {{-- the section breaker --}}
    <x-line/>

    {{-- the footer --}}
    <!-- Add more card items as needed -->
    <div class=" bg-slate-800 dark:bg-slate-200 text-gray-400 dark:text-gray-700">
        <div class="max-w-2xl flex flex-col mx-auto text-xs font-thin py-12">
            <div class="sm:flex justify-center items-center">
                <div class="max-w-xs flex items-center mx-auto rev">
                    <div class="  order-1">
                        <p class="text-right p-2">
                            Proin ex ipsum, facilisis id tincidunt sed, vulputate in lacus. Donec pharetra faucibus leo, vitae leo scelerisque eu. Nam enim dolor, porta at ex ut, eleifend tristique metus. Integer sit amet 
                        </p>
                    </div>
                    <div class="w-1/3 order-2">
                        <div class="flex justify-center items-center overflow-hidden rounded-lg border h-24 w-24 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 ">
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
                        <div class="flex justify-center items-center overflow-hidden rounded-lg border h-24 w-24 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 ">
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
                        <div class="flex justify-center items-center overflow-hidden rounded-lg border h-24 w-24 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 ">
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
                        <div class="flex justify-center items-center overflow-hidden rounded-lg border h-24 w-24 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 ">
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
