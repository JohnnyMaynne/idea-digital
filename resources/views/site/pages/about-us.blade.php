@extends('site.layouts.app')


@section('content')
    <x-app.page>
        <x-about-us.hero/>
        <x-about-us.tabs/>
        <x-about-us.about-us/>
        <x-about-us.team/>
        <x-testimonials.grid class="py-20 border-b"/>
        <x-clients.logos class="py-20"/>
    </x-app.page>
@endsection
