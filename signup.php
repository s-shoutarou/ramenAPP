<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Signup;
use ramenApp\lib\Session;
use ramenApp\lib\Functions;

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
    'cache' => Bootstrap::CACHE_DIR
]);

$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_NAME, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::LOG_PATH);
$signup =  new Signup($db);
$ses = new Session();
$fun = new Functions();

$context = [];


if (!empty($_POST)) {
    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];
    $context = $fun->EmptyCheck($user_name, $pass);

    if (empty($context)) {
        if ($signup->signup($user_name, $pass)) {
            header('Location:top.php');
            exit();
        } else {
            $context['name_err'] = 'その名前はすでに登録されています';
        }
    }
}


$template = $twig->loadTemplate('signup.html.twig');
$template->display($context);
