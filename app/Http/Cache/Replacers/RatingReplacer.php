<?php

namespace App\Http\Cache\Replacers;

use App\Helpers\viewComponent;
use App\Http\Controllers\App\ViewsController;
use App\Models\Post;
use App\Models\Work;
use App\Repositories\PostRepository;
use App\Repositories\WorkRepository;
use Blade;
use Illuminate\View\Component;
use Spatie\ResponseCache\Replacers\Replacer;
use Symfony\Component\HttpFoundation\Response;

class RatingReplacer implements Replacer
{
    private array $routes = ['blog.single'];

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
            '#<div id=\"rating\">(.+?)</div>#s',
            $this->getRating(),
            $response->getContent())
        );
    }

    private function checkRoute(): bool
    {
        $route = request()->route()->getName();

        return in_array($route,$this->routes);
    }

    private function getRating(): string
    {

        $record = app(PostRepository::class)
            ->forSlug(request()
            ->route('slug'));


        return viewComponent::render('app.rating', [
            'model' => $record,
        ]);

    }
}
