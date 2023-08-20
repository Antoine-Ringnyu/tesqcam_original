
    <div {{ $attributes->merge(['class'=>'text-center text-gray-800 dark:text-gray-200']) }}>
        <div class="sm:flex items-center w-full py-10">
            <div class="flex-1 text-5xl font-bold border-b-2 sm:border-b-0 sm:border-r-4 sm:text-6xl md:text-7xl xl:text-8xl md:text-right px-2 py-8 uppercase">{{ $title }}</div>
            <div class="flex-1 ">
                <div class="max-w-sm px-2 sm:text-left mt-4 sm:mt-0 mx-auto sm:mx-0">
                    <div class="text-base font-semibold sm:text-lg md:text-2xl capitalize">{{ $subTitle }}</div>
                    <div class="text-sm sm:text-base text-gray-600 dark:text-gray-400 md:text-lg font-thin pt-2" >{{ $caption }}</div>
                </div>
            </div>
        </div>
        {{ $slot }}
    </div>