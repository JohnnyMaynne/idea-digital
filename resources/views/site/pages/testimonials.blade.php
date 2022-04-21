@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-about-us.hero/>
        <x-about-us.tabs/>

        <x-app.section class="py-20">
            <x-app.container>
                <div class="max-w-3xl">
                    <x-app.title>Testimonials</x-app.title>
                    <div class="text-gray-500 mt-3">You can find the reviews of our clients about the work of our company. It's important that we publish all reviews, even if they are negative. However, we don't have bad reviews, this confirms our professionalism and expertise. We value the relationship with our customers and therefore are happy to share any feedback.</div>
                </div>

                <div class="mt-16 divide-y">
                    <div x-data="masonry()">
                        @foreach($testimonials as $testimonial)
                            <x-app.testimonial :testimonial="$testimonial"/>
                        @endforeach
                    </div>
                </div>
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
