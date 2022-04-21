<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\SeoPageRepository;
use App\Models\SeoPage;

class SeoPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (SeoPage::count() > 0) {
            return;
        }

        app(SeoPageRepository::class)->create([
            'title' => 'Search Engine Optimization Services',
            'published' => true,
        ]);
    }
}
