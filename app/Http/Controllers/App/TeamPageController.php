<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\EmployeeRepository;
use App\Repositories\TeamPageRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class TeamPageController extends Controller
{


    use setsMetadata;

    private EmployeeRepository $employee;
    private TeamPageRepository $page;

    public function __construct(EmployeeRepository $employee,TeamPageRepository $page)
    {
        $this->employee = $employee;
        $this->page = $page;
    }

    public function __invoke()
    {
        $page = $this->page->first();

        $this->setMetadata($page);

        return view('site.pages.team',[
            'employees' => $this->employee->get(),
            'page' => $page
        ]);
    }
}
