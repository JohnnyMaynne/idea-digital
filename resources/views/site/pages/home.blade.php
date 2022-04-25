@extends('site.layouts.app')

@section('content')
    <x-app.page invert>
        <x-app.hero :page="$page"/>

        <x-app.section>
            <x-app.container>
                <x-app.grid>
                    <div>
                        <x-app.title>{{ $page->getField('cases_title') }}</x-app.title>
                        <div class="text-gray-500 mt-3">{!! $page->getField('cases_description') !!}</div>
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

        <x-clients.logos :title="$page->getField('clients_title')" :subtitle="$page->getField('clients_description')" :clients="$page->getRelated('clients')"/>
        <x-blog.grid :title="$page->getField('posts_title')" :subtitle="$page->getField('posts_description')" :posts="$page->getRelated('posts')"/>
        <x-testimonials.grid :title="$page->getField('testimonials_title')" :subtitle="$page->getField('testimonials_description')" :testimonials="$page->getRelated('testimonials')"/>
        <x-questions.section :title="$page->getField('questions_title')" :subtitle="$page->getField('questions_description')" :questions="$page->getRelated('questions')"/>
        <x-feedback.form :title="$page->getField('contacts_title')" :subtitle="$page->getField('contacts_description')"/>
    </x-app.page>
@endsection
