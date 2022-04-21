<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\AboutUsPageRepository;
use App\Repositories\ClientRepository;
use App\Repositories\TestimonialRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{

    use setsMetadata;

    private TestimonialRepository $testimonial;
    private ClientRepository $client;
    private AboutUsPageRepository $page;

    public function __construct(
        TestimonialRepository $testimonial,
        ClientRepository $client,
        AboutUsPageRepository $page
    )
    {
        $this->testimonial = $testimonial;
        $this->client = $client;
        $this->page = $page;
    }

    public function __invoke()
    {

        $page = $this->page->first();

        $this->setMetadata($page);

        return view('site.pages.about-us',[
            'testimonials' => $this->testimonial->latest(),
            'clients' => $this->client->get(),
        ]);
    }
}
