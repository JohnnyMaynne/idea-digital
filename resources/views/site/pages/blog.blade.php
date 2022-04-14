@extends('site.layouts.app')
@php
    $items = ['All articles','Seo','Testimonials','Webdev'];
@endphp

@section('content')
    <x-app.page>
        <div>
            <div class="pt-40 pb-20 relative z-30">
                <x-app.container>
                    <div class="text-7xl max-w-[900px] max-w-3xl font-bold">
                        Blog
                    </div>
                </x-app.container>
            </div>
        </div>


        <div class="border-b">
            <x-app.container>
                <ul class="flex items-center space-x-6">
                    @foreach($items as $item)
                        <li>
                            <a class="py-4 block font-medium transition {{ $loop->index === 0 ? 'border-b border-gray-900 cursor-default' : 'border-transparent hover:opacity-50' }}" href="#">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </x-app.container>
        </div>

        <x-app.section class="py-20">
            <x-app.container>
                <x-app.grid>
                    @for ($i = 0; $i < 12; $i++)
                        <x-blog.article-card/>
                    @endfor
                </x-app.grid>
            </x-app.container>
        </x-app.section>

    </x-app.page>
@endsection
