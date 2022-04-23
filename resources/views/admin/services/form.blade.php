@extends('twill::layouts.form')

@section('contentFields')
    @formField('block_editor', [
        'blocks' => ['text','quote','image','article','slider','masonry','form'],
    ])
@stop
