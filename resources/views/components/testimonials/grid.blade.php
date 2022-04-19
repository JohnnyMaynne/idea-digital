@props(['testimonials'])

<x-app.section {{$attributes->class('')}}>
    <x-app.container>
        <x-app.grid>
            <div>
                <x-app.title>Testimonials</x-app.title>
                <div class="text-gray-500 mt-3">Here’s what our happy customers say about working with Idea Digital Agency.</div>
                <x-app.read-more :href="route('testimonials')" class="mt-3">More testimonials</x-app.read-more>
            </div>
        </x-app.grid>
        <div class="mt-16 divide-y">
            <x-app.grid>
                @foreach($testimonials as $testimonial)
                    <x-app.testimonial :testimonial="$testimonial"/>
                @endforeach
            </x-app.grid>
        </div>
    </x-app.container>
</x-app.section>
