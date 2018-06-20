<?php

namespace PeterBrinck\Brink;

use Illuminate\Filesystem\Filesystem;

class Brink
{
    public static function install()
    {
        static::updateStyles();
    }

    protected static function updateStyles()
    {
        $filesystem = new Filesystem;
        $filesystem->delete(public_path('js/app.js'));
        $filesystem->delete(public_path('css/app.css'));
        $filesystem->delete(resource_path('assets/sass/app.scss'));
        $filesystem->delete(resource_path('assets/sass/_variables.scss'));

        $filesystem->copyDirectory(__DIR__.'/brink-stubs/resources/assets/sass', resource_path('assets/sass'));
    }
}
