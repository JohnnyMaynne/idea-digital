<x-blocks.base-view :block="$block">
    @foreach($block->imagesAsArrays('image', 'desktop',['w' => 920]) as $image)
            <figure class="my-0">
                <a
                    data-fslightbox
                    href="{{ $image['src'] }}"
                >
                    <img
                        data-src="{{ $image['src'] }}"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        class="w-full h-auto object-cover shadow-2xl rounded block aspect-[180/90] bg-gray-100 transition"
                        alt="{{ $image['alt']  }}"
                        title="{{ $image['alt']  }}"
                    >
                </a>

                @if($image['caption'])
                    <div class="mx-auto w-full px-0 md:px-4 max-w-4xl">
                        <figcaption>{{ $image['caption']  }}</figcaption>
                    </div>
                @endif
            </figure>
        @endforeach
</x-blocks.base-view>

