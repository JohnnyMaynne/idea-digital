@props(['testimonial'])

@php
    $image = $testimonial->imageAsArray('cover','default',['w' => 150])
@endphp

<div class="p-5 border rounded-md">
    <div class="flex items-center space-x-4">
        @if(count($image))
            <img class="h-12 w-12 rounded-full"
                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                 data-src="{{ $image['src'] }}"
                 title="{{ $image['alt'] }}"
                 alt="{{ $image['alt'] }}">
        @endif

        <div class="flex-1">
            <div class="text-2xl font-bold">{{ $testimonial->name }}</div>
            <div class="text-gray-500 text-sm mt-1">{{ $testimonial->post }}</div>
        </div>
    </div>

    <div class="leading-relaxed prose min-w-full text-gray-900 mt-4 space-y-1">
        {!! $testimonial->text !!}
    </div>
    @if($testimonial->work)
        <x-app.read-more :href="route('cases.single',['slug' => $testimonial->work->slug])" class="mt-3">Read case</x-app.read-more>
    @endif
</div>
