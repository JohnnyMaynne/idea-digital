@extends('site.layouts.app')


@section('content')
    <x-app.page invert>
        <x-app.hero :page="$page"/>

        <x-app.section>
            <x-app.container>
                <x-app.grid>
                    <div>
                        <x-app.title>Search Engine Optimization Services</x-app.title>
                        <div class="text-gray-500 mt-3">Search engine optimization is the most effective and profitable way of getting customers for your business.</div>
                        <x-app.read-more :href="route('cases')" class="mt-3">More cases</x-app.read-more>
                    </div>
                </x-app.grid>

                <x-app.grid class="mt-16">
                    @foreach($page->getRelated('works') as $post)
                        <x-blog.article-card :post="$post"/>
                    @endforeach
                </x-app.grid>
            </x-app.container>
        </x-app.section>

        <x-clients.logos :clients="$page->getRelated('clients')"/>
        <x-blog.grid :posts="$page->getRelated('posts')"/>
        <x-testimonials.grid :testimonials="$page->getRelated('testimonials')"/>
        <x-questions.section :questions="$page->getRelated('questions')"/>
        <x-feedback.form/>
    </x-app.page>
@endsection
