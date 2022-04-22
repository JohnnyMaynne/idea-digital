@extends('twill::layouts.settings', [
     'disableContentFieldset' => true,
     'additionalFieldsets' => [
        ['fieldset' => 'main', 'label' => 'Страницы'],
    ]
])

@php
    $pages = app(\App\Repositories\PageRepository::class)->listAll();
@endphp


@section('fieldsets')
    @formFieldset(['id' => 'main', 'title' => 'Страницы конфиденциальность'])
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
    @endformFieldset
@stop
