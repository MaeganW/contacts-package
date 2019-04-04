<?php

namespace Contacts;

use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;

class Preset extends LaravelPreset
{
    public static function install()
    {
        static::noOp();
    }

    public static function cleanSassDirectory()
    {
        File::cleanDirectory(resource_path('/sass'));
    }

    public static function noOp()
    {
        echo 'does nothing for now';
    }

    // can also have a function to install with specific composer dependencies
    // can create stubs as well
}