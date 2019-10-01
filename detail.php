<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Detail;
use ramenApp\lib\Session;

$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_NAME, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::LOG_PATH);
$top = new Detail($db);
$ses = new Session();


$loade = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loade, [
    'cache' => Bootstrap::CACHE_DIR
]);

if (!empty($_GET['id']) && $_GET['id'] > 0) {
    $id = $_GET['id'];
} else {
    header('Location:top.php');
}

$context['dataArr'] = $top->getDetail($id);
(!empty($_SESSION['user_id'])) ? $context['session'] = $_SESSION : '';

$template = $twig->loadTemplate('detail.html.twig');
$template->display($context);
