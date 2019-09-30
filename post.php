<?php

namespace ramenApp;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Post;

$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_NAME, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::LOG_PATH);
$post = new Post($db);



$loade = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loade, [
    'cache' => Bootstrap::CACHE_DIR
]);

$context = [];

$arrCheckList = ['name' => '名前', 'address' => '住所', 'taste' => '味', 'introduction' => '紹介'];

foreach ($_POST as $key => $val) {
    if (empty($_POST[$key])) {
        $context['empty' . $key] = $val . 'を入力してください';
    }
}

if (!empty($_FILES)) {
    $pic = array_shift($_FILES);

    if ($type = exif_imagetype($pic['tmp_name'])) {
        $fname = sha1_file($pic['tmp_name']) . date("Y-m-dH:i:s");
    };

    move_uploaded_file($pic['tmp_name'], './pic/' . $fname . image_type_to_extension($type));
}

if (empty($context)) {
    extract($_POST);
    $post->posting($fname, $name, $address, $taste, $introduction);
    echo '投稿したよ';
}

$template = $twig->loadTemplate('post.html.twig');
$template->display($context);
