<?php

namespace ramenApp\lib;

use ramenApp\lib\PDOoperation;

class Top
{
    private $db = null;
    private $PDOope = null;

    public function __construct($db)
    {
        $this->db = $db;
        $this->PDOope = new PDOoperation($db);
    }

    public function getData()
    {
        $table = 'restaurants';
        $column = 'id,pic,name';
        $where = [];
        $arrVal = [];
        $option = ['all_flg' => 1];
        $r = $this->db->select($table, $column, $where, $arrVal, $option);
        for ($i = 0; $i < 1; $i++) {
            $r = array_shift($r);
        }
        return $r;
    }

    public function searchData($text, $switch)
    {
        $text = str_replace('　', ' ', $text);
        $text = explode(' ', $text);

        $table = 'restaurants';
        $column = 'id,pic,name';
        $where = ['name'];
        $arrVal = $text;
        $option = ['searchSwitch' => $switch];
        $r = $this->PDOope->search($table, $column, $where, $arrVal, $option);
        for ($i = 0; $i < 1; $i++) {
            $r = array_shift($r);
        }
        return $r;
    }
}
