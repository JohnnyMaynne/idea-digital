@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])

@section('contentFields')
    @formField('medias', [
        'name' => 'cover',
        'label' => 'Фото',
    ])
    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Информация',
        'max' =>  1000,
        'toolbarOptions' => ['bold','italic','underline','strike','link']
    ])
@endsection

@section('fieldsets')
    @metadataFields
@stop
