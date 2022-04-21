@props(['work'])
@php
    $image = $work->imageAsArray('cover','default',['w' => 700])
@endphp
<x-app.grid>
    <div>
        <x-app.title :href="route('cases.single',['slug' => $work->slug])">
            {{ $work->title }}
        </x-app.title>
        <div class="mt-6 prose min-w-full text-gray-500">
            {!!  $work->description !!}
        </div>
        <x-app.read-more :href="route('cases.single',['slug' => $work->slug])" class="mt-4">Case info</x-app.read-more>
    </div>
    <div>
        @if(count($image))
            <a href="{{ route('cases.single',['slug' => $work->slug]) }}" class="block hover:opacity-90">
                <img class="w-full h-auto object-cover"
                     data-src="{{ $image['src'] }}"
                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                     alt="{{ $image['alt'] }}"
                     title="{{ $image['alt'] }}"
                     >
            </a>
        @endif

    </div>
</x-app.grid>
