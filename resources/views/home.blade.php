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
<<<<<<< Updated upstream
    <div class="">
        <div class="sm:py-12 lg:py-24 text-center text-gray-800 dark:text-gray-200">
            <div class="sm:flex items-center w-full py-10">
                <div class="flex-1 text-5xl font-bold border-b-2 sm:border-b-0 sm:border-r-4 sm:text-6xl md:text-7xl xl:text-8xl md:text-right px-2 py-8 ">TesqCam</div>
                <div class="flex-1 ">
                    <div class="max-w-sm px-2 sm:text-left mt-4 sm:mt-0 mx-auto sm:mx-0">
                        <div class="text-base font-semibold sm:text-lg md:text-2xl">Turtor Exam Qestions Cameroon</div>
                        <div class="text-sm sm:text-base text-gray-800 dark:text-gray-400 md:text-lg font-thin pt-2" >we invest in you, your success is our prority that is why we value you</div>
                    </div>
                </div>
            </div>
            <x-secondary-button class="text-center px-12 rounded-3xl mb-16">Home</x-secondary-button>
        </div>
    </div>
=======

    
    <x-header 
        class="sm:py-12 lg:py-24 "
        title="tesqcam" 
        subTitle="this is the sub" 
        caption="this is all i have to say about this project and it is the best thing that" >
        <x-secondary-button class="text-center px-12 rounded-3xl mb-16">Home</x-secondary-button>
    </x-header>
>>>>>>> Stashed changes

    {{-- the section breaker --}}
    <x-line/>
 
    {{-- the product and service section --}}
    <div class=" bg-slate-900 dark:bg-slate-200 text-white dark:text-slate-800 font-thin text-center md:px-10 px-4 py-2">
        <div class=" max-w-2xl mx-auto">
            <h1 class="text-3xl  sm:text-4xl md:text-5xl my-3">Our Services</h1>
            <p class="hidden sm:block text-gray-400 text-sm font-medium">
                it is increasing ly becoming important for Cameroonians to take the have the quality services and thier reach and the ultimate gaol of tesqcam is to deliver this services 
            </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4 sm:justify-between py-4">
            {{-- turtor --}}
            <div class="max-w-xs mx-auto p-2 border sm:border-none">
                <div class="sm:w-24 sm:h-24 w-32 h-32  p-2 border bg-white shadow-md mx-auto  rounded-full overflow-hidden ">
                    <img class="w-full block object-cover" src="{{ asset('images/icons/advice.png') }}" alt="image here">
                </div>
                <h2 class="mt-3 font-semibold  md:text-base">Reliable solutions
                </h2>
                <p class="text-gray-400 sm:text-sm">
                    we invest in you, your success is our prority that is why we value you and go for passionate tutors in your field of studies
                </p>
            </div>

            {{-- Questions --}}
            <div class="max-w-xs  mx-auto p-2 border sm:border-none">
                <div class="sm:w-24 sm:h-24 w-32 h-32 p-2 border bg-white shadow-md mx-auto  rounded-full overflow-hidden ">
                    <img class="w-full block object-cover" src="{{ asset('images/icons/advice.png') }}" alt="image here">
                </div>
                <h2 class="mt-3 font-semibold  md:text-base">Reliable solutions
                </h2>
                <p class="text-gray-400 sm:text-sm">
                    we invest in you, your success is our prority that is why we value you and go for passionate tutors in your field of studies
                </p>
            </div>

            {{-- solutions --}}
            <div class="max-w-xs mx-auto p-2 border sm:border-none">
                <div class="sm:w-24 sm:h-24 w-32 h-32 p-2 border bg-white shadow-md mx-auto  rounded-full overflow-hidden ">
                    <img class="w-full block object-cover" src="{{ asset('images/icons/advice.png') }}" alt="image here">
                </div>
                <h2 class="mt-3 font-semibold  md:text-base">Reliable solutions
                </h2>
                <p class="text-gray-400 sm:text-sm">
                    we invest in you, your success is our prority that is why we value you and go for passionate tutors in your field of studies
                </p>
            </div>

        </div>
    </div>

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
<<<<<<< Updated upstream
        <div class="block  flex-1 max-w-3xl max-h-80 mx-auto overflow-hidden">
            <img class="block shadow-xl w-full object-cover object-center" src="{{ asset('images/caroselle/smilling teacher.jpg') }}" alt="the smilling turtor">
        </div>
=======
        {{-- carosell image --}}
        <x-carousel/>


>>>>>>> Stashed changes
        <div class=" text-gray-800 dark:text-gray-400 text-xs lg:flex flex-1">
            <div class="py-2 max-w-xs mx-auto border-b-4 lg:border-none">
                <h1 class="text-gray-800 dark:text-gray-200 font-extrabold text-lg">
                    <div>
                        <div x-data="{ modalOpen: false }"
                            @keydown.escape.window="modalOpen = false"
                            :class="{ 'z-40': modalOpen }" class="relative w-auto h-auto">
                            <button @click="modalOpen=true" class="hover:text-xl hover:underline">Login</button>
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
                                            {{-- <h3 class="text-lg font-semibold">Modal Title</h3> --}}
                                            <button @click="modalOpen=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>  
                                            </button>
                                        </div>
                                        <div class="relative w-auto pb-8">
                                            <div class="relative flex flex-wrap items-center w-full h-full px-8">
                    
                                                <div class="relative w-full max-w-sm mx-auto lg:mb-0">
                                                    <div class="relative text-center">
                                                        
                                                        <div class="flex flex-col mb-6 space-y-2">
                                                            <h1 class="text-2xl font-semibold tracking-tight">Create an account</h1>
                                                            <p class="text-sm text-neutral-500">Enter your email below to create your account</p>
                                                        </div>
                                                        <form onsubmit="event.preventDefault();" class="space-y-2">
                                                            <input type="text" placeholder="name@example.com" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
                                                            <button type="button" class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                                                                Sign up with Email
                                                            </button>
                                                            <div class="relative py-6">
                                                                <div class="absolute inset-0 flex items-center"><span class="w-full border-t"></span></div>
                                                                <div class="relative flex justify-center text-xs uppercase">
                                                                    <span class="px-2 bg-white text-neutral-500">Or continue with</span>
                                                                </div>
                                                            </div>
                                                            <button class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium border rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none border-input hover:bg-neutral-100" type="button">
                                                                <svg viewBox="0 0 438.549 438.549" class="w-4 h-4 mr-2"><path fill="currentColor" d="M409.132 114.573c-19.608-33.596-46.205-60.194-79.798-79.8-33.598-19.607-70.277-29.408-110.063-29.408-39.781 0-76.472 9.804-110.063 29.408-33.596 19.605-60.192 46.204-79.8 79.8C9.803 148.168 0 184.854 0 224.63c0 47.78 13.94 90.745 41.827 128.906 27.884 38.164 63.906 64.572 108.063 79.227 5.14.954 8.945.283 11.419-1.996 2.475-2.282 3.711-5.14 3.711-8.562 0-.571-.049-5.708-.144-15.417a2549.81 2549.81 0 01-.144-25.406l-6.567 1.136c-4.187.767-9.469 1.092-15.846 1-6.374-.089-12.991-.757-19.842-1.999-6.854-1.231-13.229-4.086-19.13-8.559-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559-4.093-5.331-8.232-8.945-12.419-10.848l-1.999-1.431c-1.332-.951-2.568-2.098-3.711-3.429-1.142-1.331-1.997-2.663-2.568-3.997-.572-1.335-.098-2.43 1.427-3.289 1.525-.859 4.281-1.276 8.28-1.276l5.708.853c3.807.763 8.516 3.042 14.133 6.851 5.614 3.806 10.229 8.754 13.846 14.842 4.38 7.806 9.657 13.754 15.846 17.847 6.184 4.093 12.419 6.136 18.699 6.136 6.28 0 11.704-.476 16.274-1.423 4.565-.952 8.848-2.383 12.847-4.285 1.713-12.758 6.377-22.559 13.988-29.41-10.848-1.14-20.601-2.857-29.264-5.14-8.658-2.286-17.605-5.996-26.835-11.14-9.235-5.137-16.896-11.516-22.985-19.126-6.09-7.614-11.088-17.61-14.987-29.979-3.901-12.374-5.852-26.648-5.852-42.826 0-23.035 7.52-42.637 22.557-58.817-7.044-17.318-6.379-36.732 1.997-58.24 5.52-1.715 13.706-.428 24.554 3.853 10.85 4.283 18.794 7.952 23.84 10.994 5.046 3.041 9.089 5.618 12.135 7.708 17.705-4.947 35.976-7.421 54.818-7.421s37.117 2.474 54.823 7.421l10.849-6.849c7.419-4.57 16.18-8.758 26.262-12.565 10.088-3.805 17.802-4.853 23.134-3.138 8.562 21.509 9.325 40.922 2.279 58.24 15.036 16.18 22.559 35.787 22.559 58.817 0 16.178-1.958 30.497-5.853 42.966-3.9 12.471-8.941 22.457-15.125 29.979-6.191 7.521-13.901 13.85-23.131 18.986-9.232 5.14-18.182 8.85-26.84 11.136-8.662 2.286-18.415 4.004-29.263 5.146 9.894 8.562 14.842 22.077 14.842 40.539v60.237c0 3.422 1.19 6.279 3.572 8.562 2.379 2.279 6.136 2.95 11.276 1.995 44.163-14.653 80.185-41.062 108.068-79.226 27.88-38.161 41.825-81.126 41.825-128.906-.01-39.771-9.818-76.454-29.414-110.049z"></path></svg>
                                                                <span>Github</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <p class="mt-6 text-sm text-center text-neutral-500">Already have an account? <a href="#_" class="relative font-medium text-blue-600 group"><span>Login here</span><span class="absolute bottom-0 left-0 w-0 group-hover:w-full ease-out duration-300 h-0.5 bg-blue-600"></span></a></p>
                                                    <p class="px-8 mt-1 text-sm text-center text-neutral-500">By continuing, you agree to our <a class="underline underline-offset-4 hover:text-primary" href="/terms">Terms</a> and <a class="underline underline-offset-4 hover:text-primary" href="/privacy">Policy</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
                                            <button @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors border rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2">Cancel</button>
                                            {{-- <button @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-neutral-950 hover:bg-neutral-900">Login</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
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
