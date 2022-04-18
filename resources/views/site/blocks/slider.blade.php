<x-blocks.base-view :block="$block">
    <div x-data="slider()" class="swiper overflow-hidden rounded shadow-2xl">
        <div class="swiper-wrapper">
            @foreach($block->imagesAsArrays('image', 'desktop',['w' => 920]) as $image)
                <div class="swiper-slide">
                    <div class="relative">
                        <a
                            class="relative"
                            data-fslightbox
                            href="{{ $image['src'] }}"
                        >
                            <img
                                data-src="{{ $image['src'] }}"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                class="w-full rounded h-auto m-0 z-20 block aspect-[180/90] bg-gray-100 transition"
                                alt="{{ $image['alt']  }}"
                                title="{{ $image['alt']  }}"
                        >
                        </a>

                        @if($image['caption'])
                            <div class="absolute left-0 bottom-0 w-full p-4 bg-white/5 backdrop-blur-lg z-30">
                                <div class="text-sm invert">{{ $image['caption'] }}</div>
                            </div>
                        @endif
                    </div>

                </div>
            @endforeach
        </div>
        <div x-ref="pagination" class="swiper-pagination"></div>
        <div x-ref="prev" class="swiper-button-prev"></div>
        <div x-ref="next" class="swiper-button-next"></div>
    </div>
</x-blocks.base-view>



