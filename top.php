<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Top;

$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_NAME, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::LOG_PATH);
$top = new Top($db);

$loade = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loade, [
    'cache' => Bootstrap::CACHE_DIR
]);

$context['data'] = $top->getData();
var_dump($context);

$template = $twig->loadTemplate('top.html.twig');
$template->display($context);
