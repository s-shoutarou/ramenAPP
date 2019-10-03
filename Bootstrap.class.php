<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/vendor/autoload.php';

date_default_timezone_set('Asia/Tokyo');


class Bootstrap
{
    const APP_DIR = '/Applications/MAMP/htdocs/';
    const TEMPLATE_DIR = self::APP_DIR . 'ramenApp/templates';
    const CACHE_DIR = self::APP_DIR . 'ramenApp/cache';
    const APP_URL = 'http://localhost:8888/ramenApp/';
    const LOG_PATH = self::APP_DIR . 'ramenApp/log/ramenApp.log';


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
