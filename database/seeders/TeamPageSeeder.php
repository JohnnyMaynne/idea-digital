<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\TeamPageRepository;
use App\Models\TeamPage;

class TeamPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (TeamPage::count() > 0) {
            return;
        }

        app(TeamPageRepository::class)->create([
            'title' => 'Team Idea Digital Agency',
        ]);
    }
}
