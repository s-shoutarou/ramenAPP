<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\Session;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Post;
use ramenApp\lib\Functions;
use ramenApp\lib\PDOoperation;
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
$PDOope = new PDOoperation($db);

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
    $user_id = $_SESSION['user_id'];
    $options['option'] = ['smoke' => $smoke];
    $options['option'] = array_merge($options['option'], $_POST['option']);
    $post->posting($fname, $name, $address, $taste, $price, $introduction, $user_id, $options);
    echo '投稿したよ';
} elseif (!empty($context)) {
    foreach ($postData as $key => $val) {
        $context[$key] = $val;
    }
}


$subdata['subData'] = $post->getSubData();
$context['tastes'] = $subdata['subData']['tastes'];
$context['options'] = $subdata['subData']['option'];
$context['price_range'] =  $subdata['subData']['price_range'];

var_dump($context['options']);
$template = $twig->loadTemplate('post.html.twig');
$template->display($context);
