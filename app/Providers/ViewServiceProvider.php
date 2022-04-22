<?php

namespace App\Providers;

use A17\Twill\Repositories\SettingRepository;
use App\Repositories\PageRepository;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $settings =  app(SettingRepository::class);
        $page = app(PageRepository::class);

        View::share('settings',[
            'privacy_policy' => $page->find($settings->byKey('privacy_policy')),
            'cookie_policy' => $page->find($settings->byKey('cookie_policy')),
            'terms_conditions' => $page->find($settings->byKey('terms_conditions'))
        ]);
    }
}
