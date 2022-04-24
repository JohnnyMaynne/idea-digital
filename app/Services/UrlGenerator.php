<?php

namespace App\Services;

use Illuminate\Routing\UrlGenerator as BaseUrlGenerator;
use Str;

class UrlGenerator extends BaseUrlGenerator
{
    /**
     * Format the given URL segments into a single URL.
     */

    public function format($root, $path, $route = null): string
    {
        $trailingSlash = (Str::contains($path, '#') ? '' : '/');

        return rtrim(parent::format($root, $path, $route), '/').$trailingSlash;
    }
}
