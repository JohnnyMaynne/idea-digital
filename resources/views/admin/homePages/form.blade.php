@extends('twill::layouts.form', [
     'disableContentFieldset' => true,
     'additionalFieldsets' => [
          ['fieldset' => 'cases', 'label' => 'Кейсы'],
          ['fieldset' => 'posts', 'label' => 'Статьи'],
          ['fieldset' => 'clients', 'label' => 'Клиенты'],
          ['fieldset' => 'testimonials', 'label' => 'Отзывы'],
          ['fieldset' => 'questions', 'label' => 'Вопросы'],
          ['fieldset' => 'contacts', 'label' => 'Контакты'],
          ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])



@section('fieldsets')
    @formFieldset(['id' => 'cases', 'title' => 'Кейсы', 'open' => false])
        @formField('input', [
            'name' => 'cases_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'cases_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])
        @formField('browser', [
            'endpoint' => '/content/works/browser',
            'name' => 'works',
            'label' => 'Кейсы',
            'max' => 4,
        ])
    @endformFieldset

    @formFieldset(['id' => 'clients', 'title' => 'Клиенты', 'open' => false])
        @formField('input', [
            'name' => 'clients_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'clients_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])
        @formField('browser', [
            'endpoint' => '/clients/clients/browser',
            'name' => 'clients',
            'label' => 'Клиенты',
            'max' => 100,
        ])
    @endformFieldset

    @formFieldset(['id' => 'posts', 'title' => 'Статьи', 'open' => false])
        @formField('input', [
            'name' => 'posts_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'posts_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])
        @formField('browser', [
            'endpoint' => '/content/posts/browser',
            'name' => 'posts',
            'label' => 'Статьи',
            'max' => 4,
        ])
    @endformFieldset

    @formFieldset(['id' => 'testimonials', 'title' => 'Отзывы', 'open' => false])
        @formField('input', [
            'name' => 'testimonials_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'testimonials_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])
        @formField('browser', [
            'endpoint' => '/clients/testimonials/browser',
            'name' => 'testimonials',
            'label' => 'Отзывы',
            'max' => 100,
        ])
    @endformFieldset

    @formFieldset(['id' => 'questions', 'title' => 'Вопросы', 'open' => false])
        @formField('input', [
            'name' => 'questions_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'questions_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])
        @formField('browser', [
            'endpoint' => '/content/questions/browser',
            'name' => 'questions',
            'label' => 'Вопросы',
            'max' => 100,
        ])
    @endformFieldset

    @formFieldset(['id' => 'contacts', 'title' => 'Контакты', 'open' => false])
        @formField('input', [
            'name' => 'contacts_title',
            'label' => 'Заголовок',
            'maxlength' => 100,
        ])
        @formField('wysiwyg', [
            'name' => 'contacts_description',
            'label' => 'Краткое описание',
            'max' =>  1000,
            'toolbarOptions' => ['bold','italic','underline','strike','link']
        ])
    @endformFieldset


    @metadataFields
@stop

