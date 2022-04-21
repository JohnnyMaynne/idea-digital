<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\AboutUsPageRepository;
use App\Models\AboutUsPage;

class AboutUsPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (AboutUsPage::count() > 0) {
            return;
        }

        app(AboutUsPageRepository::class)->create([
            'title' => 'About Idea Digital Agency',
            'published' => true,
        ]);
    }
}
