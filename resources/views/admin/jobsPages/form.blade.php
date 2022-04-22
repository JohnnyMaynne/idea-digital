@extends('twill::layouts.form', [
     'disableContentFieldset' => true,
     'additionalFieldsets' => [
        ['fieldset' => 'page', 'label' => 'Текст'],
        ['fieldset' => 'info', 'label' => 'Вакансии'],
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])


@section('fieldsets')
    @formFieldset(['id' => 'page', 'title' => 'Текст', 'open' => false])
    @formField('wysiwyg', [
    'name' => 'page_description',
    'label' => 'Краткое описание',
    'max' =>  1000,
    'toolbarOptions' => ['bold','italic','underline','strike','link']
    ])
    @endformFieldset
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
