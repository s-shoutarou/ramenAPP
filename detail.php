<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Detail;
use ramenApp\lib\Session;
use Dotenv\Dotenv;

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$loade = new \Twig_Loader_Filesystem(getenv('TEMPLATE_DIR'));
$twig = new \Twig_Environment($loade, [
    'cache' => getenv('CACHE_DIR')
]);

$db = new PDODatabase(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'), getenv('LOG_PATH'));
$dit = new Detail($db);
$ses = new Session();

if (!empty($_GET['id']) && $_GET['id'] > 0) {
    $id = $_GET['id'];
} else {
    header('Location:top.php');
}

$context['dataArr'] = $dit->getDetail($id);
$context['optionArr'] = $dit->getOption($id);

(!empty($_SESSION['user_id'])) ? $context['session'] = $_SESSION : '';

$template = $twig->loadTemplate('detail.html.twig');
$template->display($context);
