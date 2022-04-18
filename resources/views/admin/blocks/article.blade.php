@twillBlockTitle('Статья')
@twillBlockIcon('content-editor')


@formField('input', [
    'name' => 'title',
    'label' => 'Заголовок',
])

@formField('input', [
    'name' => 'subtitle',
    'type' => 'textarea',
    'rows' => 2,
    'label' => 'Подзаголовок',
])

@formField('browser', [
    'routePrefix' => 'content',
    'moduleName' => 'posts',
    'name' => 'posts',
    'label' => '',
    'max' => 10
])


@formField('select', [
'name' => 'columns',
'label' => 'Колоник',
'placeholder' => 'Количество колонок',
'options' => [
        [
            'value' => 1,
            'label' => '1'
        ],
        [
            'value' => 2,
            'label' => '2'
        ],
        [
            'value' => 3,
            'label' => '3'
        ],
        [
            'value' => 4,
            'label' => '4'
        ],
        [
            'value' => 5,
            'label' => '5'
        ]
]
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
