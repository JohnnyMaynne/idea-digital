@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-about-us.hero :page="$page"/>
        <x-about-us.tabs/>
        <x-about-us.about-us :page="$page"/>
        <x-about-us.team :page="$page"/>
        <x-testimonials.grid :title="$page->getField('testimonials_title')" :subtitle="$page->getField('testimonials_description')" :testimonials="$testimonials" class="py-20 border-b"/>
        <x-clients.logos :title="$page->getField('clients_title')" :subtitle="$page->getField('clients_description')" :clients="$clients" class="py-20"/>
    </x-app.page>
@endsection
