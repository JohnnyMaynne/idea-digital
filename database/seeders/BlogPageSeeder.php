<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\BlogPageRepository;
use App\Models\BlogPage;

class BlogPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (BlogPage::count() > 0) {
            return;
        }

        app(BlogPageRepository::class)->create([
            'title' => 'Blog',
            'published' => true,
        ]);
    }
}
