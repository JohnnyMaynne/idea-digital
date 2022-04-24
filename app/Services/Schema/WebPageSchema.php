<?php

namespace App\Services\Schema;

use Spatie\SchemaOrg\Schema;

class WebPageSchema extends SchemaBase
{
    public function render(): string
    {
        $settings = app('settings');

        return Schema::organization()
            ->name('Idea Digital')
            ->url(route('home'))
            ->logo(asset('assets/app/images/logo-idea.svg'))
            ->contactPoint(Schema::contactPoint()
                ->telephone($settings['phone'])
                ->contactType('customer service')
            )
            ->sameAs([
                $settings['facebook'],
                $settings['instagram'],
                $settings['linked'],
                $settings['youtube'],
            ]);
    }
}
