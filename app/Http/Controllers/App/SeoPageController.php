<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class SeoPageController extends Controller
{
    private PostRepository $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    public function __invoke()
    {
       return view('site.pages.seo',[
           'posts' => $this->post->latest()
       ]);
    }
}
