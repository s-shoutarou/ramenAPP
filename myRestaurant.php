<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Top;
use ramenApp\lib\Session;
use ramenApp\lib\myRestaurant;
use Dotenv\Dotenv;

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$loade = new \Twig_Loader_Filesystem(getenv('TEMPLATE_DIR'));
$twig = new \Twig_Environment($loade, [
    'cache' => getenv('CACHE_DIR')
]);

$db = new PDODatabase(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'), getenv('LOG_PATH'));
$top = new Top($db);
$yr = new myRestaurant($db);
$ses = new Session();

$user_id = $_SESSION['user_id'];
$context['dataArr'] = $yr->getMyRestaurant($user_id);

if (!empty($_POST['search'])) {
    $searchText = $_POST['search'];
    $searchSwitch = $_POST['ANDOR'];
    $context['dataArr'] = $top->searchData($searchText, $searchSwitch);
}

(!empty($_SESSION['user_id'])) ? $context['session'] = $_SESSION : '';

$template = $twig->loadTemplate('myRestaurant.html.twig');
$template->display($context);
