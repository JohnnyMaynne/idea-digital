@extends('twill::layouts.settings')

@php
    $pages = app(\App\Repositories\PageRepository::class)->listAll();
@endphp

@section('contentFields')
    @formField('select', [
        'label' => 'Privacy Policy',
        'name' => 'privacy_policy',
        'options' => $pages
    ])
    @formField('select', [
        'label' => 'Cookie policy',
        'name' => 'cookie_policy',
        'options' => $pages
    ])
    @formField('select', [
        'label' => 'Terms & conditions',
        'name' => 'terms_conditions',
        'options' => $pages
    ])
@stop
