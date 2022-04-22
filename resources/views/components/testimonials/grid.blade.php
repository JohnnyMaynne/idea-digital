@props([
    'testimonials',
    'title' => 'Testimonials',
    'subtitle' => 'Here’s what our happy customers say about working with Idea Digital Agency.',
])

<x-app.section {{$attributes->class('')}}>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>{{ $title }}</x-app.title>
                <div class="text-gray-500 mt-3">{!! $subtitle  !!}</div>
                <x-app.read-more :href="route('testimonials')" class="mt-3">More testimonials</x-app.read-more>
            </div>
        </x-app.grid>
        <div class="mt-16 divide-y">
            <div x-data="masonry()">
                @foreach($testimonials as $testimonial)
                    <x-app.testimonial :testimonial="$testimonial"/>
                @endforeach
            </div>
        </div>
    </x-app.container>
</x-app.section>
