@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])

@section('contentFields')
    @formField('medias', [
        'name' => 'cover',
        'label' => 'Превью',
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Краткое описание',
        'max' =>  1000,
        'toolbarOptions' => ['bold','italic','underline','strike','link']
    ])

    @formField('select', [
        'name' => 'author_id',
        'label' => 'Автор',
        'placeholder' => 'Выбрать автора',
        'options' => $authors
    ])
@stop


@section('fieldsets')
    @metadataFields
@stop
