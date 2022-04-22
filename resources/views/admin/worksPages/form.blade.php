@extends('twill::layouts.form', [
     'disableContentFieldset' => true,
     'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])





@section('fieldsets')
    @metadataFields
@stop

