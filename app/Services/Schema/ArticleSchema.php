<?php

namespace App\Services\Schema;

use App\Helpers\TextHelpers;
use Spatie\SchemaOrg\Schema;

class ArticleSchema extends SchemaBase
{

    public function render(): string
    {
        $article = $this->model;

        return Schema::newsArticle()
            ->mainEntityOfPage(Schema::WebPage()
                ->identifier(route('blog.single',['slug' => $article->slug])))
            ->headline($article->title)
            ->image(Schema::imageObject()
                ->url($article->image('cover','card',['w' => 850,'h' => 350]))
                ->width(850)
                ->height(350))
            ->datePublished($article->created_at->toIso8601String())
            ->dateModified($article->updated_at->toIso8601String())
            ->author(Schema::person()
                ->name($article->author->title))
            ->publisher(Schema::organization()
                ->name('Idea Digital Agency')
                ->logo(Schema::imageObject()
                    ->url(asset('assets/app/images/logo-idea.svg'))
                    ->width(850)
                    ->height(350)))
            ->description(TextHelpers::getExcerpt($article->renderBlocks(), 30));
    }
}
