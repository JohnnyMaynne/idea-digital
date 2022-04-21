<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\ClientRepository;
use App\Repositories\PostRepository;
use App\Repositories\QuestionRepository;
use App\Repositories\TestimonialRepository;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private PostRepository $post;
    private TestimonialRepository $testimonial;
    private QuestionRepository $question;
    private ClientRepository $client;
    private WorkRepository $work;


    public function __construct(
        PostRepository $post,
        TestimonialRepository $testimonial,
        QuestionRepository $question,
        ClientRepository $client,
        WorkRepository $work,
    )
    {
        $this->post = $post;
        $this->testimonial = $testimonial;
        $this->question = $question;
        $this->client = $client;
        $this->work = $work;
    }


    public function __invoke()
    {
        return view('site.pages.home',[
            'posts' => $this->post->latest(),
            'testimonials' => $this->testimonial->latest(),
            'questions' => $this->question->latest(),
            'clients' => $this->client->get(),
            'works' => $this->work->latest(),
        ]);
    }
}
