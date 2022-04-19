@props(['post'])

@php
    $image = $post->imageAsArray('cover', 'default', ['w' => 620]);
    $link = route('blog.single',['slug' => $post->slug]);
    $excerpt = \App\Helpers\TextHelpers::getExcerpt($post->renderBlocks(), 30)
@endphp

<div>
    @if(count($image))
        <a href="{{ $link }}" class="block aspect-[650/370] transition hover:opacity-80">
            <img class="w-full h-full object-cover"
                 data-src="{{ $image['src'] }}"
                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                 alt="{{ $image['alt'] }}"
                 title="{{ $image['alt'] }}"
            >
        </a>
    @endif
    <a href="{{ $link }}" class="block hover:decoration-gray-500 decoration-transparent underline decoration-1 underline-offset-4 transition font-bold text-2xl mt-3">
        {{ $post->title }}
    </a>
    <div class="mt-2 text-gray-500">{{ $excerpt }}</div>
    <x-app.read-more :href="$link" class="mt-2">Read more</x-app.read-more>
</div>
