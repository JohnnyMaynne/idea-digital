<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\PostCategoryRepository;
use App\Repositories\PostRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;

class PostCategoriesController extends Controller
{
    use setsMetadata;

    private PostCategoryRepository $category;
    private PostRepository $post;


    public function __construct(PostCategoryRepository $category, PostRepository $post)
    {
        $this->category = $category;
        $this->post = $post;
    }


    public function __invoke($slug)
    {
        $category = $this->category->forSlug($slug) ?? abort(404);

        $this->setMetadata($category);

        return view('site.pages.blog',[
            'category' => $category,
            'categories' => $this->category->get(),
            'posts' => $category->posts()->paginate()
        ]);
    }
}
