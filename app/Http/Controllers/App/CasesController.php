<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\WorkRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    use setsMetadata;

    private WorkRepository $work;



    public function __construct(WorkRepository $work)
    {
        $this->work = $work;
    }



    public function index()
    {
        return view('site.pages.cases',[
            'posts' => $this->work->get()
        ]);
    }



    public function show($slug)
    {
        $work = $this->work->forSlug($slug);

        views($work)->record();

        $this->setMetadata($work);

        return view('site.pages.cases-single',[
            'item' => $work
        ]);
    }
}
