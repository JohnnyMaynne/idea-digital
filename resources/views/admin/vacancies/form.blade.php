@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])

@section('contentFields')
    @formField('input', [
        'name' => 'type',
        'label' => 'Тип',
        'placeholder' => 'Example, Remote',
        'max' =>  200,
    ])


    @formField('input', [
        'name' => 'time',
        'label' => 'Время',
        'placeholder' => 'Example, Full-time',
        'max' =>  200,
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Описание',
        'type' => 'textarea',
        'max' =>  1000,
        'toolbarOptions' => [ ['list' => 'ordered'],['list' => 'bullet'],'bold','italic','underline','strike','link']
    ])
@stop


@section('fieldsets')
    @metadataFields
@stop
