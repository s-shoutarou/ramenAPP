<?php

namespace ramenApp\lib;

class Post
{
    private $db = '';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function posting($pic = '', $name = '', $address = '', $taste = '', $text = '')
    {
        $table = 'restaurants';
        $column = 'pic,name,address,taste,text';
        $arrVal = [$pic, $name, $address, $taste, $text];
        if ($this->db->insert($table, $column, $arrVal)) {
            $_SESSION['flash'] = '投稿に成功しました!';
            header('Location:http://localhost:8888/ramenApp/top.php');
            exit();
        } else {
            echo 'ミスってます';
        }
    }
}
