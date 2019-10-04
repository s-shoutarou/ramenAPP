<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/vendor/autoload.php';

date_default_timezone_set('Asia/Tokyo');


class Bootstrap
{
    const APP_DIR = '/Applications/MAMP/htdocs/';
    const APP_URL = 'http://localhost:8888/ramenApp/';

    public static function loadClass($class)
    {
        $path = str_replace('\\', '/', self::APP_DIR . $class . '.class.php');
        require_once $path;
    }
}

spl_autoload_register(
    [
        'ramenApp\Bootstrap',
        'loadClass'
    ]
);
