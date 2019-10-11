<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\Session;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Post;
use ramenApp\lib\Detail;
use ramenApp\lib\Edit;
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
$det = new Detail($db);
$edit = new Edit($db);
$PDOope = new PDOoperation($db);

$context = [];
$postData = [];

$detailid = $_GET['id'];

if (!empty($_POST)) {
    $postData = $_POST;
    $context['err_msg'] = $fun->emptyCheckPost($postData);
}

if (!empty($_FILES['pic']['tmp_name'])) {
    $fname = $fun->picUpload($_FILES);
    $postData =  array_merge($postData, ['pic' => $fname]);
}

if (empty($context['err_msg']) && !empty($postData)) {
    $user_id = $_SESSION['user_id'];
    $edit->editing($postData, $detailid);
    echo '投稿したよ';
} elseif (!empty($context)) {
    foreach ($postData as $key => $val) {
        $context[$key] = $val;
    }
}


$context['detail'] = $det->getDetail($_GET['id']);

$subdata['subData'] = $post->getSubData();

$context['options'] = $edit->makeCheckBox($subdata['subData']['option'], $context['detail']);
$context['tastes'] = $subdata['subData']['tastes'];
$context['price_range'] =  $subdata['subData']['price_range'];

$template = $twig->loadTemplate('edit.html.twig');
$template->display($context);
