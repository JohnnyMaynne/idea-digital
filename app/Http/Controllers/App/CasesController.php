<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\WorkRepository;
use App\Repositories\WorksPageRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    use setsMetadata;

    private WorkRepository $work;
    private WorksPageRepository $page;


    public function __construct(WorkRepository $work,WorksPageRepository $page)
    {
        $this->work = $work;
        $this->page = $page;
    }


    public function index()
    {
        $page = $this->page->first();

        $this->setMetadata($page);

        return view('site.pages.cases',[
            'posts' => $this->work->get(),
            'page' => $page
        ]);
    }


    public function show($slug)
    {
        $work = $this->work->forSlug($slug) ?? abort(404);

        $this->setMetadata($work);

        views($work)->record();

        return view('site.pages.cases-single',[
            'item' => $work
        ]);
    }
}
