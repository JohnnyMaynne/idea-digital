@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])

@section('contentFields')
    @formField('input', [
    'name' => 'description',
    'label' => 'Description',
    'maxlength' => 100
    ])
@stop

@section('fieldsets')
    @metadataFields
@stop
