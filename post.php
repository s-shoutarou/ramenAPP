<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\Session;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Post;
use ramenApp\lib\Functions;
use Dotenv\Dotenv;

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$loade = new \Twig_Loader_Filesystem(getenv('TEMPLATE_DIR'));
$twig = new \Twig_Environment($loade, [
    'cache' => getenv('CACHE_DIR')
]);

$db = new PDODatabase(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'), getenv('LOG_PATH'));
$post = new Post($db);
$ses = new Session();
$fun = new Functions();

$context = [];
$postData = [];

if (!empty($_POST)) {
    $postData = $_POST;
    $context = $fun->emptyCheckPost($postData);
}

if (!empty($_FILES)) {
    $file = $_FILES;
    $fname = $fun->picUpload($file);
} else {
    $context['pic'] = '写真の選択は必須です';
}


if (empty($context) && !empty($postData)) {
    extract($postData);
    $post->posting($fname, $name, $address, $taste, $text);
    echo '投稿したよ';
} elseif (!empty($context)) {
    foreach ($postData as $key => $val) {
        $context[$key] = $val;
    }
}


$template = $twig->loadTemplate('post.html.twig');
$template->display($context);
