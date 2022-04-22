<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\BlogPageRepository;
use App\Repositories\PostCategoryRepository;
use App\Repositories\PostRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{

    use setsMetadata;

    private PostCategoryRepository $category;
    private PostRepository $post;
    private BlogPageRepository $page;


    public function __construct(
        PostCategoryRepository $category,
        PostRepository $post,
        BlogPageRepository $page
    ){
        $this->category = $category;
        $this->post = $post;
        $this->page = $page;
    }


    public function __invoke()
    {
        $page = $this->page->first();

        $this->setMetadata($page);

        return view('site.pages.blog',[
            'categories' => $this->category->get(),
            'posts' => $this->post->get(),
            'page' => $page
        ]);
    }
}
