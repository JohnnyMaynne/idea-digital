@extends('site.layouts.app')


@section('content')
    <x-app.page invert>
        <x-app.hero/>
        <x-works.latest/>
        <x-clients.logos :clients="$clients"/>
        <x-blog.grid :posts="$posts"/>
        <x-testimonials.grid :testimonials="$testimonials"/>
        <x-questions.section :questions="$questions"/>
        <x-feedback.form/>
    </x-app.page>
@endsection
