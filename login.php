<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Login;
use ramenApp\lib\Session;
use ramenApp\lib\Functions;
use Dotenv\Dotenv;


$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
    'cache' => Bootstrap::CACHE_DIR
]);

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$db = new PDODatabase(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'), Bootstrap::LOG_PATH);
$login =  new Login($db);
$ses = new Session();
$fun = new Functions();
$context = [];

$fun->loginCheck();

if (!empty($_POST)) {
    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];
    $context = $fun->EmptyCheck($user_name, $pass);
    if (empty($context)) {
        $result = $login->userLogin($user_name, $pass);
    }
}

$context = [];

$template = $twig->loadTemplate('login.html.twig');
$template->display($context);
