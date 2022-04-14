@php
    $items = ['About us','Team','Testimonials','Jobs'];
@endphp

<div class="border-b">
    <x-app.container>
        <ul class="flex items-center space-x-6">
            @foreach($items as $item)
                <li>
                    <a class="py-4 block font-medium transition {{ $loop->index === 0 ? 'border-b border-gray-900 cursor-default' : 'border-transparent hover:opacity-50' }}" href="#">{{ $item }}</a>
                </li>
            @endforeach
        </ul>
    </x-app.container>
</div>
