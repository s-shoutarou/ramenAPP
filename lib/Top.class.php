<?php

namespace ramenApp\lib;

class Top
{
    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getData()
    {
        $table = 'restaurants';
        $column = 'pic,name';
        $where = [];
        $arrVal = [];
        $all_flg = 1;
        return $this->db->select($table, $column, $where, $arrVal, $all_flg);
    }
}
