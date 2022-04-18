@twillBlockTitle('Masonry')
@twillBlockIcon('flex-grid')

@formField('medias', [
    'name' => 'image',
    'label' => null,
    'max' => 999
])

@formField('input', [
    'name' => 'columns',
    'type' => 'number',
    'label' => 'Колонки',
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

