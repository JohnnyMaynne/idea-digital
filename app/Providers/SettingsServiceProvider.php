<?php

namespace App\Providers;

use A17\Twill\Repositories\SettingRepository;
use App\Repositories\PageRepository;
use Illuminate\Support\ServiceProvider;
use View;

class SettingsServiceProvider extends ServiceProvider
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
        $settings = app(SettingRepository::class)
            ->all()
            ->flatMap(fn($q) => [$q->key => $q->value])
            ->toArray();


        $pages = app(PageRepository::class)
            ->whereIn('id', [
                $settings['privacy_policy'],
                $settings['cookie_policy'],
                $settings['terms_conditions']
            ])
            ->published()
            ->with('slugs')
            ->get();

        $settings['privacy'] = $pages;

        $this->app->singleton('settings', fn () => $settings);
    }
}
