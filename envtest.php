<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);

$dotenv->load();

$host = getenv('DB_HOST');

echo $host;
