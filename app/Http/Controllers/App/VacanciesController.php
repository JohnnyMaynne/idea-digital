<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\VacancyRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{

    use setsMetadata;

    private VacancyRepository $vacancy;



    public function __construct(VacancyRepository $vacancy)
    {
        $this->vacancy = $vacancy;
    }



    public function index()
    {
        return view('site.pages.job',[
            'vacancies' => $this->vacancy->get()
        ]);
    }



    public function show($slug)
    {
        $vacancy = $this->vacancy->forSlug($slug) ?? abort(404);

        $this->setMetadata($vacancy);

        return view('site.pages.job-single',[
            'vacancy' => $vacancy
        ]);
    }
}
