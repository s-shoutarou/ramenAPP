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
            for ($i = 0; $i < 50; $i++) {
                $db->insert('users', 'user_name,pass', [$faker->name, $faker->password]);
            }
            break;
        case 2:
            //ランダム取得
            $id = $db->select('users', 'id', [], [], ['all_flg' => 1]);
            $id = $id[0];
            $allid = [];
            for ($ii = 0; $ii < count($id); $ii++) {
                $allid[$ii] = $id[$ii]['id'];
            }
            for ($i = 0; $i < 50; $i++) {
                $fakepic = $faker->imageUrl(640, 480, 'cats');
                $data = file_get_contents($fakepic);
                $pic = 'fake'  . date("Y-m-dH:i:s") . '.jpg';
                file_put_contents('./pic/'  . $pic, $data);
                $id = $allid[array_rand($allid)];
                $db->insert('restaurants', 'pic,name,address,taste,introduction,user', [$pic, $faker->name, $faker->city, $faker->text, $faker->text, $id]);
            }
            break;
    }
}

$template = $twig->loadTemplate('fake.html.twig');
$template->display([]);
