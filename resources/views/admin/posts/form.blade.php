@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])

@section('contentFields')
    @formField('medias', [
        'name' => 'cover',
        'label' => 'Изображение',
    ])

    @formColumns
        @slot('left')
            @formField('select', [
                'name' => 'category_id',
                'label' => 'Категория',
                'placeholder' => 'Выбрать категорию',
                'options' => $categories
            ])
        @endslot
        @slot('right')
            @formField('select', [
                'name' => 'author_id',
                'label' => 'Автор',
                'placeholder' => 'Выбрать автора',
                'options' => $authors
            ])
        @endslot
    @endformColumns

    @formField('block_editor', [
        'blocks' => ['text','quote','image','article','slider','masonry','form'],
        'withoutSeparator' => true
    ])
@stop

@section('fieldsets')
    @metadataFields
@stop
