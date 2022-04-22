<?php

namespace App\Services\Schema;

use Spatie\SchemaOrg\Schema;

class WebPageSchema extends SchemaBase
{
    public function render(): string
    {
        return Schema::organization()
            ->name('Amploo')
            ->url(url('/'))
            ->logo('#')
            ->contactPoint(Schema::contactPoint()
                ->telephone('+38 (099) 907 32 92')
                ->contactType('customer service')
            )
            ->sameAs(['https://www.facebook.com','https://www.youtube.com','https://www.instagram.com']);
    }
}
