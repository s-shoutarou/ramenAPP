<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\Session;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Post;
use ramenApp\lib\Functions;
use Dotenv\Dotenv;

$loade = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loade, [
    'cache' => Bootstrap::CACHE_DIR
]);

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$db = new PDODatabase(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'), Bootstrap::LOG_PATH);
$post = new Post($db);
$ses = new Session();
$fun = new Functions();

$context = [];

if (!empty($_POST)) {
    $postData = $_POST;
    $context = $fun->emptyCheckPost($postData);
}

if (!empty($_FILES)) {
    $file = $_FILES;
    $fname = $fun->picUpload($file);
}

if (empty($context) && !empty($postData)) {
    extract($postData);
    $post->posting($fname, $name, $address, $taste, $introduction);
    echo '投稿したよ';
}

$template = $twig->loadTemplate('post.html.twig');
$template->display($context);
