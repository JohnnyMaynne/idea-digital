<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\ContactsPageRepository;
use App\Models\ContactsPage;

class ContactsPageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (ContactsPage::count() > 0) {
            return;
        }

        app(ContactsPageRepository::class)->create([
            'title' => 'Contact Idea Digital Agency',
        ]);
    }
}
