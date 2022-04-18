@twillBlockTitle('Основной текст')
@twillBlockIcon('text')

@formField('wysiwyg', [
    'name' => 'field',
    'label' => null,
    'toolbarOptions' => [
        ['header' => [2, 3, 4, 5, 6, false]],
        'bold',
        'italic',
        'underline',
        'strike',
        ["script" => "super"],
        ["script" => "sub"],
        ['list' => 'ordered'],
        ['list' => 'bullet'],
        ['indent' => '-1'],
        ['indent' => '+1'],
        ["align" => []],
        'link',
        "clean",
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
