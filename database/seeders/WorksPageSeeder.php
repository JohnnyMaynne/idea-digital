<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\WorksPageRepository;
use App\Models\WorksPage;

class WorksPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (WorksPage::count() > 0) {
            return;
        }

        app(WorksPageRepository::class)->create([
            'title' => 'Cases',
            'published' => true,
        ]);
    }
}
