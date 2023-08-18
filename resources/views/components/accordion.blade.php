
<div x-data="{ 
    activeAccordion: '', 
    setActiveAccordion(id) { 
        this.activeAccordion = (this.activeAccordion == id) ? '' : id 
    } 
}" class="relative w-full mx-auto overflow-hidden text-sm font-normal divide-y divide-gray-200 ">

<div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
    <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full py-4 text-left select-none group-hover:text-base">
        <span>{{ $title }}</span>
        <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </button>
    <div x-show="activeAccordion==id" x-collapse x-cloak>
        <div class="p-4 pt-0 opacity-70">
            {{ $content }}
        </div>
    </div>
</div>
</div>