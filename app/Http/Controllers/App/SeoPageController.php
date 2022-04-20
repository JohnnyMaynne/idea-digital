<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;

class SeoPageController extends Controller
{
    private WorkRepository $post;

    public function __construct(WorkRepository $post)
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
