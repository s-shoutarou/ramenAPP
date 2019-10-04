<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Session;
use ramenApp\lib\Unsubscribe;
use ramenApp\lib\Functions;
use Dotenv\Dotenv;

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$loade = new \Twig_Loader_Filesystem(getenv('TEMPLATE_DIR'));
$twig = new \Twig_Environment($loade, [
    'cache' => getenv('CACHE_DIR')
]);

$db = new PDODatabase(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'), getenv('LOG_PATH'));
$uns = new Unsubscribe($db);
$ses = new Session();
$fun = new Functions();

$fun->unsubscribeLoginCheck();

$context = [];

if (!empty($_POST)) {
    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];
    $context['err_msg'] = $uns->unsubscribe($user_name, $pass);
}

$template = $twig->loadTemplate('unsubscribe.html.twig');
$template->display($context);
