@twillBlockTitle('Форма обратной связи')
@twillBlockIcon('website')

@formColumns
    @slot('left')
        @formField('input', [
            'name' => 'title',
            'label' => 'Заголовок',
            'default' => 'Collect the cost of Internet promotion',
            'required' => true
        ])
    @endslot
    @slot('middle')
        @formField('input', [
            'name' => 'subtitle',
            'label' => 'Подзаголовок',
            'default' => 'We will assess the current state of the site and offer a promotion plan.',
            'required' => true
        ])
    @endslot
    @slot('right')
        @formField('input', [
            'name' => 'button',
            'label' => 'Кнопка',
            'default' => 'Get a quote',
            'required' => true
        ])
    @endslot
@endformColumns



@formField('repeater', [
    'type' => 'form_item',
])


@formField('select', [
    'name' => 'width',
    'label' => 'Ширина',
    'placeholder' => 'Ширина контейнера',
    'unpack' => true,
    'default' => 'default',
    'options' => [
        [
            'value' => 'default',
            'label' => 'Cтандартная'
        ],
        [
            'value' => 'middle',
            'label' => 'Средняя'
        ],
        [
            'value' => 'wide',
            'label' => 'Широкая'
        ]
    ]
])

