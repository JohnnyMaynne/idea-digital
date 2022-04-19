@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-about-us.hero/>
        <x-about-us.tabs/>

        <x-app.section class="py-20">
            <x-app.container>
                <div class="max-w-3xl">
                    <x-app.title>Our team</x-app.title>
                    <div class="text-gray-500 mt-3">idea Digital Agency team builds your website strength and rankings with sustainable SEO services that bring relevant leads to your site. We focus on ethical and sustainable SEO techniques to develop your site profile. Let SEO data work hard so you can stand out from the crowd and delight your customers!</div>
                </div>

                <ul role="list" class="mt-20 text-center grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:gap-x-8 lg:gap-y-12 xl:grid-cols-5">

                    @foreach($employees as $employee)
                        <li>
                            <div class="space-y-4">
                                @php
                                    $image = $employee->imageAsArray('cover','default',['w' => 200]);
                                @endphp
                                @if(count($image))
                                 <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                                      src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                      data-src="{{ $image['src'] }}"
                                      title="{{ $image['alt'] }}"
                                      alt="{{ $image['alt'] }}">
                                @endif

                                <div class="space-y-2">
                                    <div class="text-xs font-medium lg:text-sm">
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
