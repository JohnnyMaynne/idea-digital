<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use App\Repositories\SeoPageRepository;
use App\Repositories\WorkRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class SeoPageController extends Controller
{
    use setsMetadata;

    private SeoPageRepository $seoPage;

    public function __construct(SeoPageRepository $seoPage)
    {
        $this->seoPage = $seoPage;
    }

    public function __invoke()
    {
        $page = $this->seoPage->first();

        $this->setMetadata($page);

        return view('site.pages.seo', [
            'page' => $page,
        ]);
    }
}
