<?php

namespace ramenApp\lib;

use ramenApp\lib\PDODatabase;

class myRestaurant
{
    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getMyRestaurant($user_id)
    {
        $table = 'restaurants';
        $column = 'id,name,pic';
        $where = ['user'];
        $arrVal = [$user_id];
        $result = $this->db->select($table, $column, $where, $arrVal);
        $result = array_reverse($result);
        return $result;
    }
}
