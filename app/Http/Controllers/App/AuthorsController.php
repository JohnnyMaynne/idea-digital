<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\AuthorRepository;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    private AuthorRepository $author;

    public function __construct(AuthorRepository $author)
    {
        $this->author = $author;
    }

    public function __invoke($slug)
    {
        $author = $this->author->forSlug($slug) ?? abort(404);

        return view('site.pages.author',[
            'author' => $author,
            'posts' => $author->posts()->paginate()
        ]);
    }
}
