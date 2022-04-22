@extends('site.layouts.app')

@php
    $image = $author->imageAsArray('cover','default',['w' => 200])
@endphp

@section('content')
    <x-app.page>
        <div>
            <div class="pt-40 pb-10 relative z-30">
                <x-app.container>
                    <div class="max-w-5xl flex items-center space-x-4">
                        @if(count($image))
                            <img class="w-36 rounded-full h-auto object-cover"
                                 data-src="{{ $image['src'] }}"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 alt="{{ $image['alt'] }}"
                                 title="{{ $image['alt'] }}"/>
                        @endif
                        <div>
                            <div class="text-7xl font-bold"> {{ $author->title }}</div>
                            @if($author->description)
                                <div class="mt-4 text-gray-500">
                                    {!! $author->description !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </x-app.container>
            </div>
        </div>

        <x-author.tabs :author="$author"/>

        <x-app.section class="pb-20 pt-10">
            <x-app.container>
                <x-app.grid class="mt-12">
                    @foreach($posts as $post)
                        <x-blog.article-card :blog="!request()->query('cases')" :post="$post"/>
                    @endforeach
                </x-app.grid>
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
