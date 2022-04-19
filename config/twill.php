<?php

//'projects' => [ // module name if you added a morph map entry for it, otherwise FQCN of the model (eg. App\Models\Project)
//    'name' => 'projects', // module name
//    'label' => 'projects', // optional, if the name of your module above does not work as a label
//    'label_singular' => 'project', // optional, if the automated singular version of your name/label above does not work as a label
//    'routePrefix' => 'work', // optional, if the module is living under a specific routes group
//    'count' => true, // show total count with link to index of this module
//    'create' => true, // show link in create new dropdown
//    'activity' => true, // show activities on this module in actities list
//    'draft' => true, // show drafts of this module for current user
//    'search' => true, // show results for this module in global search
//],

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
                'routePrefix' => 'content.authors',
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
                'routePrefix' => 'content.authors',
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
