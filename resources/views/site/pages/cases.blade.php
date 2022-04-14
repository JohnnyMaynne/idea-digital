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
                        Cases
                    </div>
                </x-app.container>
            </div>
        </div>

       <div>
            <x-app.container>
                <x-app.grid>
                    @for ($i = 0; $i < 12; $i++)
                        <x-blog.article-card/>
                    @endfor
                </x-app.grid>
            </x-app.container>
       </div>

    </x-app.page>
@endsection
