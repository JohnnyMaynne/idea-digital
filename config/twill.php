<?php

return [
    'locale' => 'ru',

    'dashboard' => [
        'modules' => [
            'App\Models\Post' => [
                'label' => 'Cтатьи',
                'label_singular' => 'Статья',
                'name' => 'posts',
                'routePrefix' => 'content.posts',
                'count' => true,
                'create' => true,
                'activity' => true,
                'draft' => true,
                'search' => true,
                'search_fields' => ['title']
            ],
            'App\Models\PostCategory' => [
                'label' => 'Категории',
                'label_singular' => 'Категория',
                'name' => 'postCategories',
                'routePrefix' => 'content.posts',
                'count' => true,
                'create' => true,
                'activity' => true,
                'draft' => true,
                'search' => true,
                'search_fields' => ['title']
            ],
            'App\Models\Author' => [
                'label' => 'Авторы',
                'label_singular' => 'Автор',
                'name' => 'authors',
                'routePrefix' => 'content',
                'count' => true,
                'create' => true,
                'activity' => true,
                'draft' => true,
                'search' => true,
                'search_fields' => ['title']
            ],
            'App\Models\Employee' => [
                'label' => 'Сотрудники',
                'label_singular' => 'Сотрудник',
                'name' => 'employees',
                'routePrefix' => 'team',
                'count' => true,
                'create' => true,
                'activity' => true,
                'draft' => true,
                'search' => true,
                'search_fields' => ['title']
            ],
            'App\Models\Question' => [
                'label' => 'Вопросы',
                'label_singular' => 'Вопрос',
                'name' => 'questions',
                'routePrefix' => 'content',
                'count' => false,
                'create' => true,
                'activity' => true,
                'draft' => true,
                'search' => true,
                'search_fields' => ['title']
            ],
            'App\Models\Comment' => [
                'label' => 'Коментарии',
                'label_singular' => 'Коментарий',
                'name' => 'comments',
                'routePrefix' => 'content',
                'count' => true,
                'create' => true,
                'activity' => true,
                'draft' => true,
                'search' => true,
                'search_fields' => ['comment']
            ],
        ],
    ],
    'block_editor' => [
        'crops' => [
            'image' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'free' => [
                    [
                        'name' => 'free',
                        'ratio' =>  'auto',
                    ],
                ],
            ],
        ],
    ],
    'glide' => [
        'default_params' => [
            'fm' => 'jpg',
            'q' => '100',
            'fit' => 'max',
        ],
    ]
];
