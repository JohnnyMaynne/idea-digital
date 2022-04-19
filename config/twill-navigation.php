<?php

return [
    'content' => [
        'title' => 'Контент',
        'route' => 'admin.content.posts.index',
        'primary_navigation' => [
            'posts' => [
                'title' => 'Блог',
                'module' => true,
                'secondary_navigation' => [
                    'posts' => [
                        'title' => 'Статьи',
                        'module' => true,
                    ],
                    'postCategories' => [
                        'title' => 'Категории',
                        'module' => true,
                    ],
                ]
            ],

            'works' => [
                'title' => 'Кейсы',
                'module' => true,
            ],

            'authors' => [
                'title' => 'Доп. материалы',
                'module' => true,
                'secondary_navigation' => [
                    'authors' => [
                        'title' => 'Авторы',
                        'module' => true,
                    ],

                    'comments' => [
                        'title' => 'Коментарии',
                        'module' => true,
                    ],

                    'questions' => [
                        'title' => 'Вопросы',
                        'module' => true,
                    ],
                ]
            ],
        ]
    ],

    'team' => [
        'title' => 'Команда',
        'route' => 'admin.team.employees.index',
        'primary_navigation' => [
            'employees' => [
                'title' => 'Команда',
                'module' => true,
                'secondary_navigation' => [
                    'employees' => [
                        'title' => 'Сотрудники',
                        'module' => true,
                    ],
                    'departments' => [
                        'title' => ' Отделы',
                        'module' => true,
                    ],
                ]
            ],


            'vacancies' => [
                'title' => 'Вакансии',
                'module' => true,
            ],
        ]
    ],

    'clients' => [
        'title' => 'Клиенты',
        'route' => 'admin.clients.clients.index',
        'primary_navigation' => [
            'clients' => [
                'title' => 'Клиенты',
                'module' => true,
            ],

            'testimonials' => [
                'title' => 'Отзывы',
                'module' => true,
            ],
        ]
    ],

    'feedback' => [
        'title' => 'Обратная связь',
        'route' => 'admin.feedback.emails.index',
        'primary_navigation' => [
            'emails' => [
                'title' => 'Обратная связь',
                'module' => true,
            ],

            'subscribers' => [
                'title' => 'Подписчики',
                'module' => true,
            ],
        ]
    ],

    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'seo'],
        'primary_navigation' => [
            'seo' => [
                'title' => 'Seo settings',
                'route' => 'admin.settings',
                'params' => ['section' => 'seo']
            ],
        ]
    ],
];
