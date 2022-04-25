<?php

namespace App\Providers;

use Blade;
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
        View::share('menu', config('ideadigital.menu'));

        Blade::directive('settings',function ($string) {
            return "<?php echo settings($string); ?>";
        });
    }
}
