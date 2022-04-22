@extends('twill::layouts.form', [
     'disableContentFieldset' => true,
     'additionalFieldsets' => [
          ['fieldset' => 'cases', 'label' => 'Кейсы'],
          ['fieldset' => 'posts', 'label' => 'Статьи'],
          ['fieldset' => 'clients', 'label' => 'Клиенты'],
          ['fieldset' => 'testimonials', 'label' => 'Отзывы'],
          ['fieldset' => 'questions', 'label' => 'Вопросы'],
          ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])



@section('fieldsets')
    @formFieldset(['id' => 'cases', 'title' => 'Кейсы', 'open' => false])
        @formField('browser', [
            'endpoints' => [
                ['label' => 'Кейсы','value' => '/content/works/browser']
            ],
            'name' => 'works',
            'label' => 'Кейсы',
            'max' => 4,
        ])
    @endformFieldset

    @formFieldset(['id' => 'posts', 'title' => 'Статьи', 'open' => false])
        @formField('browser', [
            'endpoints' => [
                ['label' => 'Статьи','value' => '/content/posts/browser']
            ],
            'name' => 'posts',
            'label' => 'Статьи',
            'max' => 4,
        ])
    @endformFieldset

    @formFieldset(['id' => 'clients', 'title' => 'Клиенты', 'open' => false])
        @formField('browser', [
            'endpoints' => [
                ['label' => 'Клиенты','value' => '/clients/clients/browser']
            ],
            'name' => 'clients',
            'label' => 'Клиенты',
            'max' => 100,
        ])
    @endformFieldset

    @formFieldset(['id' => 'testimonials', 'title' => 'Отзывы', 'open' => false])
        @formField('browser', [
            'endpoints' => [
                ['label' => 'Отзывы','value' => '/clients/testimonials/browser']
            ],
            'name' => 'testimonials',
            'label' => 'Отзывы',
            'max' => 4,
        ])
    @endformFieldset

    @formFieldset(['id' => 'questions', 'title' => 'Вопросы', 'open' => false])
        @formField('browser', [
            'endpoints' => [
                ['label' => 'Вопросы','value' => '/content/questions/browser']
            ],
            'name' => 'questions',
            'label' => 'Вопросы',
            'max' => 4,
        ])
    @endformFieldset


    @metadataFields
@stop

