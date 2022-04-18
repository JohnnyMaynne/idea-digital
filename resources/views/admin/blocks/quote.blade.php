@twillBlockTitle('Цитата')
@twillBlockIcon('quote')

@formField('wysiwyg', [
    'name' => 'field',
    'label' => null,
    'toolbarOptions' => [
    'bold',
    'italic',
    'underline',
    'strike',
    ["script" => "super"],
    ["script" => "sub"],
    'link'
    ],
    'placeholder' => 'Напишите что нибудь хорошее....',
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
