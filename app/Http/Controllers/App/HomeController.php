<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private PostRepository $post;


    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }


    public function __invoke()
    {
        return view('site.pages.home',[
            'posts' => $this->post->latest()
        ]);
    }
}
