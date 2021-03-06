@props(['page'])

<div {{ $attributes->class('min-h-hero relative') }}>
    <div class="pt-40 relative z-30">
        <x-app.container>
            <div class="text-7xl max-w-3xl font-bold text-white">
                {{ $page->title }}
            </div>
            <x-app.read-more :href="route('about-us')" invert class="mt-10">Read more</x-app.read-more>
        </x-app.container>
    </div>
    <img  class="absolute z-10 left-0 top-0 bottom-0 right-0 w-full h-full object-cover select-none" src="{{ asset('assets/app/images/bg.jpg') }}">
    <div class="bg-black opacity-70 absolute z-20 left-0 top-0 w-full h-full"></div>
</div>
