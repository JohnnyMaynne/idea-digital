@props(['url','title'])

@php
  $links = \Share::page($url, $title)
        ->facebook()
        ->telegram()
        ->twitter()
        ->linkedin()
        ->getRawLinks();
@endphp


<div class="w-full flex items-center justify-between mx-auto">
    <span class="relative z-0 inline-flex shadow-sm rounded-md">
        @foreach($links as $name => $link)
            <a class="{{ !$loop->first ? '-ml-px' : ''  }} relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500" rel="nofollow" target="_blank" href="{{ $link }}">{{ ucfirst($name)  }}</a>
        @endforeach
    </span>
    {{ $slot }}
</div>
