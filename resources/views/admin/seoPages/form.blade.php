@extends('twill::layouts.form', [
    'disableContentFieldset' => true,
    'additionalFieldsets' => [
        ['fieldset' => 'content', 'label' => 'Содержание'],
        ['fieldset' => 'steps', 'label' => 'Шаги'],
        ['fieldset' => 'cases', 'label' => 'Кейсы'],
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])


@section('fieldsets')
    @formFieldset(['id' => 'content', 'title' => 'Содержание', 'open' => false])
        @formField('wysiwyg', [
            'name' => 'description',
            'label' => 'Описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])

        @formField('block_editor', [
            'blocks' => []
        ])
    @endformFieldset


    @formFieldset(['id' => 'steps', 'title' => 'Шаги', 'open' => false])
        @formField('repeater', [
            'type' => 'steps',
        ])
    @endformFieldset

    @formFieldset(['id' => 'cases', 'title' => 'Кейсы', 'open' => false])
        @formField('browser', [
            'endpoints' => [
                [
                    'label' => 'Кейсы',
                    'value' => '/content/works/browser',
                ]
            ],
            'name' => 'works',
            'label' => 'Кейсы',
            'max' => 4,
        ])
    @endformFieldset

    @metadataFields
@stop

