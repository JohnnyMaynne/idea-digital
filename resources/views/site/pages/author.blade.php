@extends('site.layouts.app')

@php
    $image = $author->imageAsArray('cover','default',['w' => 200])
@endphp

@section('content')
    <x-app.page>
        <div>
            <div class="pt-40 pb-0 relative z-30">
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
                            <div class="mt-4 text-gray-500">
                                At this difficult time for Ukraine, we decided to share our volunteering stories with you. We hope it would strengthen your faith in the indestructibility and benevolence of our people.The&nbsp;Idea...
                            </div>
                        </div>
                    </div>
                </x-app.container>
            </div>
        </div>

        <x-app.section class="py-20">
            <x-app.container>
                <x-app.grid>
                    @foreach($posts as $post)
                        <x-blog.article-card :post="$post"/>
                    @endforeach
                </x-app.grid>
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection