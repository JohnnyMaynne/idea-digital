<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Schema extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return 'schema';
    }

}
