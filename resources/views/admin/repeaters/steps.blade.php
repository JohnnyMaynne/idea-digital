@twillRepeaterTitle('Шаг')
@twillRepeaterMax('10')


@formColumns
    @slot('left')
        @formField('input', [
        'name' => 'title',
        'label' => 'Заголовок',
        'required' => true
        ])
    @endslot
    @slot('right')
        @formField('input', [
        'name' => 'subtitle',
        'label' => 'Подзаголовок',
        'required' => true
        ])
    @endslot
@endformColumns




@formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Описание',
    'type' => 'textarea',
    'max' =>  1000,
    'toolbarOptions' => [ ['list' => 'ordered'],['list' => 'bullet'],'bold','italic','underline','strike','link']
])

