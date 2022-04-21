@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <div class="pt-40 pb-0 relative z-30">
            <x-app.container>
                <div class="px-4 max-w-4xl text-6xl mx-auto font-bold">
                    {{ $page->title }}
                </div>
            </x-app.container>
        </div>


        <x-app.section class="pt-0">
            <x-app.container>
                <div class="prose {{config('ideadigital.editor')}} min-w-full mt-5">
                    <article>
                        {!! $page->renderBlocks() !!}
                    </article>
                </div>
            </x-app.container>
        </x-app.section>
    </x-app.page>
@endsection
