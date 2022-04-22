<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use App\Services\Schema\ArticleSchema;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    use setsMetadata;

    private PostRepository $post;


    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }


    public function __invoke(ArticleSchema $schema)
    {
        $item = $this->post->forSlug(request('slug')) ?? abort(404);

        $this->setMetadata($item);

        views($item)->record();

        \SchemaSeo::addSchema($schema->setModel($item));

        return view('site.pages.blog-single',[
            'item' => $item,
            'related' => $this->post->related($item),
        ]);
    }
}
