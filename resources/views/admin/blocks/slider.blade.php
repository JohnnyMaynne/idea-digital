@twillBlockTitle('Slider')
@twillBlockIcon('slideshow')

@formField('medias', [
    'name' => 'image',
    'label' => null,
    'max' => 999
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

