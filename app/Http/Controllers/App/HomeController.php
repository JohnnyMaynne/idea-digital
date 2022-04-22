<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\HomePageRepository;
use App\Services\Schema\FaqSchema;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;

class HomeController extends Controller
{
    use setsMetadata;

    private HomePageRepository $page;


    public function __construct(HomePageRepository $page)
    {
        $this->page = $page;
    }


    public function __invoke(FaqSchema $schema)
    {
        $page = $this->page->first();

        $this->setMetadata($page);

        \SchemaSeo::addSchema($schema->setModel($page));

        return view('site.pages.home',[
            'page' => $page
        ]);
    }
}
