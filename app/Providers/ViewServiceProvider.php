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
            ->with('slugs')
            ->get();

        $this->app->singleton('settings', fn () => $settings);

        View::share('settings', [
            'privacy_policy' => $pages->where('id', $settings['privacy_policy'])->first(),
            'cookie_policy' => $pages->where('id', $settings['cookie_policy'])->first(),
            'terms_conditions' => $pages->where('id', $settings['terms_conditions'])->first(),
        ]);

        View::share('menu', [
            ['route' => 'seo', 'title' => 'Seo'],
            ['route' => 'cases', 'title' => 'Cases'],
            ['route' => 'about-us', 'title' => 'About Us'],
            ['route' => 'blog', 'title' => 'Blog'],
            ['route' => 'contacts', 'title' => 'Contacts'],
        ]);

    }
}
