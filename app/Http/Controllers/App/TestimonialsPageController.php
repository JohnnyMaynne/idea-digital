<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\TestimonialRepository;
use Illuminate\Http\Request;

class TestimonialsPageController extends Controller
{
    private TestimonialRepository $testimonial;

    public function __construct(TestimonialRepository $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function __invoke()
    {
        return view('site.pages.testimonials',[
            'testimonials' => $this->testimonial->get()
        ]);
    }
}
