@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'cover',
        'label' => 'Фото',
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Должность',
        'maxlength' => 200
    ])
@stop
