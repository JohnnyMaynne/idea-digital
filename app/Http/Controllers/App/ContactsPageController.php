<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\ContactsPageRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;

class ContactsPageController extends Controller
{
    use setsMetadata;

    private ContactsPageRepository $page;

    public function __construct(ContactsPageRepository $page)
    {
        $this->page = $page;
    }

    public function __invoke()
    {
        $page = $this->page->first();

        $this->setMetadata($page);

        return view('site.pages.contacts',[
            'page' => $page
        ]);
    }
}
