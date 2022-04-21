<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\PostCategoryRepository;
use App\Repositories\PostRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{

    use setsMetadata;

    private PostCategoryRepository $category;
    private PostRepository $post;


    public function __construct(PostCategoryRepository $category, PostRepository $post)
    {
        $this->category = $category;
        $this->post = $post;
    }


    public function __invoke()
    {
        return view('site.pages.blog',[
            'categories' => $this->category->get(),
            'posts' => $this->post->get()
        ]);
    }
}
