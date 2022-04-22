<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Repositories\AuthorRepository;
use App\Services\Schema\AuthorSchema;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    use SetsMetadata;

    private AuthorRepository $author;

    public function __construct(AuthorRepository $author)
    {
        $this->author = $author;
    }

    public function __invoke($slug, AuthorSchema $schema)
    {
        $author = $this->author->forSlug($slug) ?? abort(404);

        $this->setMetadata($author);

        \SchemaSeo::addSchema($schema->setModel($author));

        return view('site.pages.author',[
            'author' => $author,
            'posts' => request()->query('cases') === 'true'
                ?  $author->works()->paginate()
                : $author->posts()->paginate(),
        ]);
    }
}
