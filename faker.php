<?php

namespace ramenApp;

require_once 'vendor/fzaninotto/faker/src/autoload.php';

use Faker\Factory;

$faker = Factory::create('ja_JP');

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use ramenApp\Bootstrap;
use ramenApp\lib\PDODatabase;
use ramenApp\lib\Signup;
use ramenApp\lib\Functions;
use Dotenv\Dotenv;

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$db = new PDODatabase(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'), getenv('LOG_PATH'));
$fun = new Functions();

$loade = new \Twig_Loader_Filesystem(getenv('TEMPLATE_DIR'));
$twig = new \Twig_Environment($loade, [
    'cache' => getenv('CACHE_DIR')
]);

$sig = new Signup($db);

if (!empty($_POST)) {
    switch ($_POST['val']) {
        case 1:
            for ($i = 1; $i < 50; $i++) {
                $db->insert('users', 'user_name,pass', [$faker->name, $faker->password]);
            }
            break;
        case 2:
            for ($i = 1; $i < 50; $i++) {
                $fakepic = $faker->imageUrl(640, 480, 'cats');
                $data = file_get_contents($fakepic);
                file_put_contents('./pic/fake' . $i . '.jpg', $data);
                touch('/pic/' . $pic);
                $db->insert('restaurants', 'name,address,taste,introduction,pic', [$faker->name, $faker->city, $faker->text, $faker->text, 'fake' . $i . '.jpg']);
            }
    }
}

$template = $twig->loadTemplate('fake.html.twig');
$template->display([]);


/*
$loade = new \Twig_Loader_Filesystem(getenv('TEMPLATE_DIR'));
$twig = new \Twig_Environment($loade, [
    'cache' => getenv('CACHE_DIR')
]);

$db = new PDODatabase(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'), getenv('LOG_PATH'));
$top = new Detail($db);
$ses = new Session();

if (!empty($_GET['id']) && $_GET['id'] > 0) {
    $id = $_GET['id'];
} else {
    header('Location:top.php');
}

$context['dataArr'] = $top->getDetail($id);
(!empty($_SESSION['user_id'])) ? $context['session'] = $_SESSION : '';

$template = $twig->loadTemplate('top.html.twig');
$template->display($context);
*/
