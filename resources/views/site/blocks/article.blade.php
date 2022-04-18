@php
    $items = $block->getRelated('posts');
    switch ($block->input('columns')) {
            case 5:
                $columns = 'grid-cols-5';
                break;
            case 4:
                $columns = 'grid-cols-4';
                break;
            case 3:
                $columns = 'grid-cols-3';
                break;
            case 2:
                $columns = 'grid-cols-2';
                break;
            default:
                 $columns = 'grid-cols-1';
                break;
        }
@endphp

<x-blocks.base-view :block="$block">

    <div class="max-w-4xl mx-auto">
        @if($block->input('title'))
            <h2 class="mb-2 mt-0">{{ $block->input('title') }}</h2>
        @endif
        @if($block->input('subtitle'))
            <p class="text-gray-500 mt-0 text-sm">{{ $block->input('subtitle') }}</p>
        @endif
    </div>


    <div class="grid {{ $columns }} gap-4 my-4">
        @foreach($items as $item)
            <a href="{{ route('blog.single', ['slug' => $item->slug]) }}" class="border overflow-hidden rounded-md no-underline block relative group">
            <div class="p-4 relative z-20">
                <div class="text-sm text-gray-500">
                    <time datetime="2020-03-16">{{ $item->created_at->format('M d, Y') }}</time>
                </div>
                <div class="no-underline mt-2 block">
                    <div class="text-xl font-semibold text-gray-900">
                        {{ $item->title }}
                    </div>
                </div>
            </div>
            <img class="absolute transition blur-2xl group-hover:opacity-10 mt-0 opacity-20 left-0 top-0 w-full h-full object-cover z-10" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ $item->image('cover','default', ['w' => 900 ]) }}" alt="{{ $item->title }}" title="{{ $item->title }}">
        </a>
        @endforeach
    </div>
</x-blocks.base-view>
