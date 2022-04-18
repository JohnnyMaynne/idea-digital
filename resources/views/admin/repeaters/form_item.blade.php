@twillRepeaterTitle('Поле формы')
@twillRepeaterMax('10')


@formColumns
    @slot('left')
        @formField('input', [
            'name' => 'field',
            'label' => 'Название поля',
            'required' => true
        ])
    @endslot
    @slot('right')
        @formField('select', [
            'name' => 'type',
            'label' => 'Тип поля',
            'placeholder' => 'Выбрать тип поля',
            'default' => 'text',
            'options' => [
                [
                    'value' => 'text',
                    'label' => 'Текстовое поле',
                ],
                [
                    'value' => 'numbers',
                    'label' => 'Номер телефона',
                ],
                [
                    'value' => 'email',
                    'label' => 'Почта',
                ]
            ]
        ])
    @endslot
@endformColumns

@formField('checkbox', [
    'name' => 'required',
    'label' => 'Обязательное поле'
])
