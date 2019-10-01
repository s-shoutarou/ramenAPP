<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Login;
use ramenApp\lib\Session;

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
    'cache' => Bootstrap::CACHE_DIR
]);

$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_NAME, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::LOG_PATH);
$login =  new Login($db);
$ses = new Session();

if (!empty($_SESSION['user_name'])) {
    header('Location:top.php');
}


if (!empty($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
} else {
    $context['emptyname'] = '名前を入力してください';
};

if (!empty($_POST['pass'])) {
    $pass = $_POST['pass'];
} else {
    $context['emptypass'] = 'パスワードを入力してください';
};

if (!empty($user_name) && !empty($pass)) {
    $result = $login->userLogin($user_name, $pass);
}

$context = [];

$template = $twig->loadTemplate('login.html.twig');
$template->display($context);
