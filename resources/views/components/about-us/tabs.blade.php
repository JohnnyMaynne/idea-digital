@php
    $route = request()->route()->getName();

    $items = [
        ['route' => route('about-us'), 'title' => 'About us','active' => $route === 'about-us'],
        ['route' => route('team'), 'title' => 'Team','active' => $route === 'team'],
        ['route' => route('testimonials'), 'title' => 'Testimonials','active' => $route === 'testimonials'],
        ['route' => route('job'), 'title' => 'Jobs','active' => $route === 'job'],
    ];
@endphp

<div class="border-b">
    <x-app.container>
        <ul class="flex items-center space-x-6">
            @foreach($items as $item)
                <li>
                    <a class="py-4 block font-medium transition {{ $item['active'] ? 'border-b border-gray-900 cursor-default' : 'border-transparent hover:opacity-50' }}" href="{{ $item['route'] }}">{{ $item['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </x-app.container>
</div>
