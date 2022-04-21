<x-blocks.base-view :block="$block">
    <div x-data="masonry()" class="mx-auto">
        @foreach($block->imagesAsArrays('image', 'free', ['w' => 920]) as $image)
            <div style="width: {{ 100/($block->input('columns') ?? 2) }}%; margin-bottom: 20px; padding-right: 20px;" class="grid-item">
                <a
                    class="relative"
                    data-fslightbox
                    href="{{ $image['src'] }}"
                >
                    <img class="block object-cover rounded shadow-2xl m-0 w-full h-auto bg-gray-100 transition"
                         alt="{{ $image['alt']  }}"
                         title="{{ $image['alt']  }}"
                         src="{{ $image['src'] }}"
                         data-src="{{ $image['src'] }}"
                    />
                </a>
            </div>
        @endforeach
    </div>
</x-blocks.base-view>



