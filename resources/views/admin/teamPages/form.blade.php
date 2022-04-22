@extends('twill::layouts.form', [
     'disableContentFieldset' => true,
     'additionalFieldsets' => [
        ['fieldset' => 'info', 'label' => 'Информация'],
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])


@section('fieldsets')
    @formFieldset(['id' => 'info', 'title' => 'Информация', 'open' => false])
        @formField('input', [
            'name' => 'section_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'section_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])
    @endformFieldset


    @metadataFields
@stop

