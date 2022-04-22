<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class QuestionController extends BaseModuleController
{
    protected $moduleName = 'questions';

    protected $titleColumnKey = 'question';

    protected $indexOptions = [
        'permalink' => false,
        'reorder' => true,
    ];

    protected $indexColumns = [
        'question' => [
            'title' => 'Вопрос',
            'field' => 'question',
        ],
        'answer' => [
            'title' => 'Ответ',
            'field' => 'answer',
        ],
    ];

    protected $browserColumns = [
        'title' => [
            'title' => 'Вопрос',
            'field' => 'question',
        ],
    ];
}
