<?php

namespace App\Http\Cache\Replacers;

use App\Http\Controllers\App\ViewsController;
use App\Models\Post;
use App\Models\Work;
use App\Repositories\PostRepository;
use App\Repositories\WorkRepository;
use Spatie\ResponseCache\Replacers\Replacer;
use Symfony\Component\HttpFoundation\Response;

class ViewsReplacer implements Replacer
{
    private array $routes = ['blog.single','cases.single'];

    public function prepareResponseToCache(Response $response): void
    {
        //
    }

    public function replaceInCachedResponse(Response $response): void
    {
        if(! $this->checkRoute()) {
            return;
        }

        if (! $response->getContent()) {
            return;
        }

        $response->setContent(preg_replace(
            '#<span id=\"views_count\"></span>#s',
            $this->getCountViews(),
            $response->getContent())
        );
    }

    private function checkRoute(): bool
    {
        $route = request()->route()->getName();

        return in_array($route,$this->routes);
    }

    private function getCountViews(): int
    {
        $model = match (request()->route()->getName()) {
            'blog.single' => PostRepository::class,
             default => WorkRepository::class,
        };

        $record = app($model)->forSlug(request()->route('slug'));

        views($record)->record();

        return views($record)->count();
    }
}
