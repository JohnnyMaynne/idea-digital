<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;

class PageController extends BaseModuleController
{
    protected $moduleName = 'pages';

    protected $indexOptions = [
        'reorder' => false,
    ];

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;

    protected function form($id, $item = null)
    {
        $item = $this->repository->getById($id, $this->formWith, $this->formWithCount);

        $this->permalinkBase = $item->ancestorsSlug;

        return parent::form($id, $item);
    }

    protected function formData($request)
    {
        return [
            'metadata_card_type_options' => config('metadata.card_type_options'),
            'metadata_og_type_options' => config('metadata.opengraph_type_options'),
        ];
    }
}
