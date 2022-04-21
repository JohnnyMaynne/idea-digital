<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\JobsPageRepository;
use App\Models\JobsPage;

class JobsPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (JobsPage::count() > 0) {
            return;
        }

        app(JobsPageRepository::class)->create([
            'title' => 'Job in Idea Digital Agency',
        ]);
    }
}
