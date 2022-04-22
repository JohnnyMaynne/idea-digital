<?php

namespace App\Services\Schema;

use A17\Twill\Repositories\SettingRepository;
use Spatie\SchemaOrg\Schema;

class WebPageSchema extends SchemaBase
{

    private SettingRepository $setting;

    public function __construct(SettingRepository $setting)
    {
        $this->setting = $setting;
    }

    public function render(): string
    {
        return Schema::organization()
            ->name('Idea Digital')
            ->url(route('home'))
            ->logo(asset('assets/app/images/logo-idea.svg'))
            ->contactPoint(Schema::contactPoint()
                ->telephone($this->setting->byKey('phone'))
                ->contactType('customer service')
            )
            ->sameAs([
                $this->setting->byKey('facebook'),
                $this->setting->byKey('instagram'),
                $this->setting->byKey('linked'),
                $this->setting->byKey('youtube'),
            ]);
    }
}
