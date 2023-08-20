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
                <x-input-label value="Notify me about anything new">Notify me about anything new</x-input-label>
                <div>
                    <input class="block w-full rounded-md mx-auto" type="email" name="email" id="mail">
                    <x-primary-button class="mt-3">Subscribe</x-primary-button>
                </div>
            </div>
            <div class="py-2 max-w-xs mx-auto border-b-4 lg:border-none">
                <h1 class="text-gray-800 dark:text-gray-200 font-extrabold text-lg">
                    <x-register-form/>
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
        <x-testimonial-card 
        src="{{ asset('images/Caroselle/smilling teacher.jpg') }}"
        name="Ntaryike Antoine"
        comment="the day i got this is the day i saw that i can write any thing at the speed of light but i was s"
        >    
        </x-testimonial-card>

        <x-testimonial-card 
        src="{{ asset('images/Caroselle/student in class.jpg') }}"
        name="Ntaryike Antoine"
        comment="the day i got this is the day i saw that i can write any thing at the speed of light but i was s"
        >    
        </x-testimonial-card>

        <x-testimonial-card 
        src="{{ asset('images/testimonials/IMG-20220425-WA0064.jpg') }}"
        name="Ntaryike Antoine"
        comment="the day i got this is the day i saw that i can write any thing at the speed of light but i was s"
        >    
        </x-testimonial-card>

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
