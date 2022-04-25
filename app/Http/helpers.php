<?php

if (! function_exists('settings')) {
    function settings(string $key)
    {
        if (isset(app('settings')[$key])) {
            return app('settings')[$key];
        }

        return null;
    }
}

if (! function_exists('has_settings')) {
    function has_settings(string $key)
    {
        return isset(app('settings')[$key]);
    }
}
