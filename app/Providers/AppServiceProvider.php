<?php

namespace App\Providers;

use App\Services\Schema\BreadcrumbsSchema;
use App\Services\Schema\SchemaRender;
use App\Services\Schema\WebPageSchema;
use Illuminate\Support\ServiceProvider;
use SchemaSeo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('schema', function () {
            return new SchemaRender();
        });

        SchemaSeo::addSchema($this->app->make(WebPageSchema::class));
        if(request()->server->get('REQUEST_URI') !==  '/') {
            SchemaSeo::addSchema($this->app->make(BreadcrumbsSchema::class));
        }
    }
}
