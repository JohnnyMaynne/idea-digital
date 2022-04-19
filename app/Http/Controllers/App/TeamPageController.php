<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\EmployeeRepository;
use Illuminate\Http\Request;

class TeamPageController extends Controller
{

    private EmployeeRepository $employee;

    public function __construct(EmployeeRepository $employee)
    {
        $this->employee = $employee;
    }

    public function __invoke()
    {
        $employees = $this->employee->get();

        return view('site.pages.team',[
            'employees' => $employees
        ]);
    }
}
