<?php

return [
    'pages' => [
        'title' => 'Разделы',
        'route' => 'admin.pages.homePage',
        'primary_navigation' => [
            'homePage' => [
                'title' => 'Главная',
                'singleton' => true,
            ],
            'seoPage' => [
                'title' => 'SEO',
                'singleton' => true,
            ],
            'worksPage' => [
                'title' => 'Кейсы',
                'singleton' => true,
            ],
            'aboutUsPage' => [
                'title' => 'О нас',
                'singleton' => true,
            ],
            'teamPage' => [
                'title' => 'Команда',
                'singleton' => true,
            ],
            'testimonialsPage' => [
                'title' => 'Отзывы',
                'singleton' => true,
            ],
            'jobsPage' => [
                'title' => 'Работа',
                'singleton' => true,
            ],
            'blogPage' => [
                'title' => 'Блог',
                'singleton' => true,
            ],
            'contactsPage' => [
                'title' => 'Контакты',
                'singleton' => true,
            ],


        ]
    ],

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


            'services' => [
                'title' => 'Услуги',
                'module' => true,
            ],

            'pages' => [
                'title' => 'Страницы',
                'module' => true,
            ],

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

//    'feedback' => [
//        'title' => 'Обратная связь',
//        'route' => 'admin.feedback.emails.index',
//        'primary_navigation' => [
//            'emails' => [
//                'title' => 'Обратная связь',
//                'module' => true,
//            ],
//
//            'subscribers' => [
//                'title' => 'Подписчики',
//                'module' => true,
//            ],
//        ]
//    ],


    'settings' => [
        'title' => 'Настройки',
        'route' => 'admin.settings',
        'params' => ['section' => 'links'],
        'primary_navigation' => [
            'links' => [
                'title' => 'Конфиденциальность',
                'route' => 'admin.settings',
                'params' => ['section' => 'links']
            ],
            'contacts' => [
                'title' => 'Контакты',
                'route' => 'admin.settings',
                'params' => ['section' => 'contacts']
            ],
        ]
    ],
];
