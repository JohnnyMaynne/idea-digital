@extends('site.layouts.app')


@section('content')
    <x-app.hero/>
    <x-works.latest/>
    <x-clients.logos/>
    <x-blog.grid/>
    <x-testimonials.grid/>
    <x-questions.section/>
    <x-feedback.form/>
@endsection
