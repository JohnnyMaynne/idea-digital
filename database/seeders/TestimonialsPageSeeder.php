<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\TestimonialsPageRepository;
use App\Models\TestimonialsPage;

class TestimonialsPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (TestimonialsPage::count() > 0) {
            return;
        }

        app(TestimonialsPageRepository::class)->create([
            'title' => 'Testimonials about Idea Digital Agency',
        ]);
    }
}
