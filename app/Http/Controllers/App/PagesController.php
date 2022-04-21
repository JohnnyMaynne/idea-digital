<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    use SetsMetadata;


    private PageRepository $page;


    public function __construct(PageRepository $page)
    {
        $this->page = $page;
    }


    public function __invoke($slug)
    {
        $page = $this->page->forNestedSlug($slug) ?? abort(404);

        $this->setMetadata($page);

        return view('site.pages.page',[
            'page' => $page
        ]);
    }
}
