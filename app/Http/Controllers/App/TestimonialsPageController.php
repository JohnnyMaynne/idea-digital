<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\TestimonialRepository;
use App\Repositories\TestimonialsPageRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class TestimonialsPageController extends Controller
{

    use setsMetadata;

    private TestimonialRepository $testimonial;
    private TestimonialsPageRepository $page;

    public function __construct(TestimonialRepository $testimonial,TestimonialsPageRepository $page)
    {
        $this->testimonial = $testimonial;
        $this->page = $page;
    }

    public function __invoke()
    {
        $page = $this->page->first();

        $this->setMetadata($page);

        return view('site.pages.testimonials',[
            'testimonials' => $this->testimonial->get()
        ]);
    }
}
