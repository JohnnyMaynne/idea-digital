<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{

    protected $signature = 'sitemap:generate';


    protected $description = 'Generate the sitemap.';


    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        SitemapGenerator::create('https://' . config('app.url'))
            ->hasCrawled(fn (Url $url) =>
                    $url->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            )
            ->writeToFile(public_path('sitemap.xml'));
    }
}
