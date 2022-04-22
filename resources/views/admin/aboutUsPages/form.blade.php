@extends('twill::layouts.form', [
     'disableContentFieldset' => true,
     'additionalFieldsets' => [
        ['fieldset' => 'about', 'label' => 'О нас'],
        ['fieldset' => 'team', 'label' => 'Команда'],
        ['fieldset' => 'testimonials', 'label' => 'Отзывы'],
        ['fieldset' => 'clients', 'label' => 'Клиенты'],
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])


@section('fieldsets')
    @formFieldset(['id' => 'about', 'title' => 'О нас', 'open' => false])
        @formField('input', [
            'name' => 'about_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'about_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])
    @endformFieldset

    @formFieldset(['id' => 'team', 'title' => 'Команда', 'open' => false])
        @formField('input', [
            'name' => 'team_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'team_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])

        @formColumns
            @slot('left')
                @formField('input', [
                    'name' => 'alex_name',
                    'label' => 'Саша',
                    'maxlength' => 100
                ])
                @formField('input', [
                    'name' => 'alex_position',
                    'label' => 'Сноска',
                    'maxlength' => 100
                ])
                @formField('medias', [
                    'name' => 'alex',
                    'label' => 'Фото'
                ])
            @endslot
            @slot('right')
                @formField('input', [
                    'name' => 'julia_name',
                    'label' => 'Юля',
                    'maxlength' => 100
                ])
                @formField('input', [
                    'name' => 'julia_position',
                    'label' => 'Сноска',
                    'maxlength' => 100
                ])
                @formField('medias', [
                    'name' => 'julia',
                    'label' => 'Фото'
                ])
            @endslot
        @endformColumns
    @endformFieldset

    @formFieldset(['id' => 'testimonials', 'title' => 'Отзывы', 'open' => false])
        @formField('input', [
            'name' => 'testimonials_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'testimonials_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])

        @formField('browser', [
            'endpoint' => '/clients/testimonials/browser',
            'name' => 'testimonials',
            'label' => 'Отзывы',
            'max' => 100,
        ])
    @endformFieldset

    @formFieldset(['id' => 'clients', 'title' => 'Клиенты', 'open' => false])
        @formField('input', [
            'name' => 'clients_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'clients_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])
        @formField('browser', [
            'endpoint' => '/clients/clients/browser',
            'name' => 'clients',
            'label' => 'Клиенты',
            'max' => 100,
        ])
    @endformFieldset

    @metadataFields
@stop

