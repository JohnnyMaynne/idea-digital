@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'question',
        'label' => 'Вопрос',
        'maxlength' => 200
    ])

    @formField('wysiwyg', [
        'name' => 'answer',
        'label' => 'Ответ',
        'type' => 'textarea',
        'max' =>  1000,
        'toolbarOptions' => ['bold','italic','underline','strike','link']
    ])
@stop
