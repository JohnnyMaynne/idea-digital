@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Клиент',
        'maxlength' => 200
    ])
    @formField('medias', [
        'name' => 'cover',
        'label' => 'Логотип',
    ])
@stop
