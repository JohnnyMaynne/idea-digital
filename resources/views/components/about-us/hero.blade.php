@props(['page'])

@php
    $route = request()->route()->getName();

   $items = [
        ['route' => route('about-us'), 'title' => 'About us','active' => $route === 'about-us'],
        ['route' => route('team'), 'title' => 'Team','active' => $route === 'team'],
        ['route' => route('testimonials'), 'title' => 'Testimonials','active' => $route === 'testimonials'],
        ['route' => route('job'), 'title' => 'Jobs','active' => $route === 'job'],
    ];
@endphp


<div {{ $attributes->class('relative') }}>
    <div class="pt-40 pb-20 relative z-30">
        <x-app.container>
            <div class="text-7xl max-w-[900px] max-w-3xl font-bold">
                {{ $page->title }}
            </div>
        </x-app.container>
    </div>
</div>
