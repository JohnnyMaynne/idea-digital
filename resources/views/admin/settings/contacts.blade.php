@extends('twill::layouts.settings', [
     'disableContentFieldset' => true,
     'additionalFieldsets' => [
        ['fieldset' => 'main', 'label' => 'Основные контакты'],
        ['fieldset' => 'hr', 'label' => 'HR контакты'],
        ['fieldset' => 'emails', 'label' => 'Почта для писем'],
        ['fieldset' => 'social', 'label' => 'Соц. сети'],
    ]
])

@section('fieldsets')
    @formFieldset(['id' => 'main', 'title' => 'Основные контакты'])
        @formField('input', [
            'name' => 'address',
            'label' => 'Адрес',
        ])
        @formField('input', [
            'name' => 'phone',
            'label' => 'Номер телефона',
        ])
        @formField('input', [
            'name' => 'email',
            'label' => 'Эл.почта',
        ])
    @endformFieldset
    @formFieldset(['id' => 'hr', 'title' => 'HR контакты'])
        @formField('input', [
            'name' => 'hr_email',
            'label' => 'Эл.почта',
        ])
    @endformFieldset
    @formFieldset(['id' => 'emails', 'title' => 'Почта для писем'])
        @formField('input', [
            'name' => 'get_email',
            'label' => 'Эл.почта',
        ])
    @endformFieldset
    @formFieldset(['id' => 'social', 'title' => 'Соц. сети'])
        @formField('input', [
            'label' => 'Facebook',
            'name' => 'facebook',
        ])
        @formField('input', [
            'label' => 'Instagram',
            'name' => 'instagram',
        ])
        @formField('input', [
            'label' => 'Twitter',
            'name' => 'twitter',
        ])
        @formField('input', [
            'label' => 'Linked',
            'name' => 'linked',
        ])
        @formField('input', [
            'label' => 'Youtube',
            'name' => 'youtube',
        ])
    @endformFieldset
@stop

