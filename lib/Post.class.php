<?php

namespace ramenApp\lib;

class Post
{
    private $db = '';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function posting($pic = '', $name = '', $address = '', $taste = '', $introduction = '')
    {
        $table = 'restaurants';
        $column = 'pic,name,address,taste,introduction';
        $arrVal = [$pic, $name, $address, $taste, $introduction];
        if ($this->db->insert($table, $column, $arrVal)) {
            header('Location:http://localhost:8888/ramenApp/top.php');
            exit();
        } else {
            echo 'ミスってます';
        }
    }
}
