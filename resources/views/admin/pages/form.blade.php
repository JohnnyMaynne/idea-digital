@extends('twill::layouts.form', [
     'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])

@section('contentFields')
    @formField('block_editor', [
        'blocks' => ['text','quote','image','article','slider','masonry','form']
    ])
@stop


@section('fieldsets')
    @metadataFields
@stop
