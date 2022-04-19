<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\ClientRepository;
use App\Repositories\TestimonialRepository;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    private TestimonialRepository $testimonial;
    private ClientRepository $client;

    public function __construct(TestimonialRepository $testimonial,ClientRepository $client)
    {
        $this->testimonial = $testimonial;
        $this->client = $client;
    }

    public function __invoke()
    {
        return view('site.pages.about-us',[
            'testimonials' => $this->testimonial->latest(),
            'clients' => $this->client->get(),
        ]);
    }
}
