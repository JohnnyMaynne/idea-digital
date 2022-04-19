@extends('site.layouts.app')


@section('content')
    <x-app.page invert>
        <x-app.hero/>
        <x-works.latest/>
        <x-clients.logos/>
        <x-blog.grid :posts="$posts"/>
        <x-testimonials.grid/>
        <x-questions.section/>
        <x-feedback.form/>
    </x-app.page>
@endsection
