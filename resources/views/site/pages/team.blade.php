@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-about-us.hero :page="$page"/>
        <x-about-us.tabs/>

        <x-app.section class="py-20">
            <x-app.container>
                <div class="max-w-3xl">
                    <x-app.title>Our team</x-app.title>
                    <div class="text-gray-500 mt-3">idea Digital Agency team builds your website strength and rankings with sustainable SEO services that bring relevant leads to your site. We focus on ethical and sustainable SEO techniques to develop your site profile. Let SEO data work hard so you can stand out from the crowd and delight your customers!</div>
                </div>

                <ul role="list" class="mt-20 space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
                    @foreach($employees as $employee)
                        @php
                            $image = $employee->imageAsArray('cover','default',['w' => 350]);
                        @endphp
                        <li>
                            <div class="space-y-4">
                                <div>
                                    @if(count($image))
                                        <img class="object-cover w-full h-auto shadow-lg rounded-lg"
                                             src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                             data-src="{{ $image['src'] }}"
                                             title="{{ $image['alt'] }}"
                                             alt="{{ $image['alt'] }}">
                                    @endif
                                </div>

                                <div class="space-y-2">
                                    <div class="font-medium space-y-1">
                                        <h3>{{ $employee->title }}</h3>
                                        <p class="text-gray-500">{{ $employee->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
