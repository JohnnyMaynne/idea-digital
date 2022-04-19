@extends('twill::layouts.form')

@section('contentFields')


    @formField('medias', [
        'name' => 'cover',
        'label' => 'Фото',
    ])

    @formColumns
        @slot('left')
            @formField('input', [
                'name' => 'name',
                'label' => 'Имя',
                'maxlength' => 200
            ])
        @endslot
        @slot('right')
            @formField('input', [
                'name' => 'post',
                'label' => 'Должность',
                'maxlength' => 200
            ])
        @endslot
    @endformColumns


    @formField('wysiwyg', [
        'name' => 'text',
        'label' => 'Отзыв',
        'type' => 'textarea',
        'max' =>  1000,
        'toolbarOptions' => ['bold','italic','underline','strike','link']
    ])


    @formField('browser', [
        'endpoints' => [
            [
              'label' => 'Кейс',
              'value' => '/content/works/browser',
            ],
        ],
        'name' => 'work',
        'label' => 'Кейс',
        'max' => 1,
    ])
@stop
