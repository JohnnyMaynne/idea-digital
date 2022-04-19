<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Post;
use App\Models\Work;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function __invoke(Search $search)
    {
       return $search
            ->registerModel(Post::class, 'title')
            ->registerModel(Author::class, 'title')
            ->registerModel(Work::class, 'title')
            ->search(request('value') ?? '±');
    }
}
