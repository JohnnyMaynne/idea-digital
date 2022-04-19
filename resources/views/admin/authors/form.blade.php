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
@endsection

@section('fieldsets')
    @metadataFields
@stop
