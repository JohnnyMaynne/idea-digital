@props(['author'])

@php
    $query = request()->query('cases') === 'true';

    $items = [
        ['route' => route('author',['slug' => $author->slug]), 'title' => 'Blog posts','active' => !$query],
        ['route' => route('author',['slug' => $author->slug, 'cases' => 'true']), 'title' => 'Cases','active' => $query],
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
