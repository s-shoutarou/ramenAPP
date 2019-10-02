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
        $column = 'id,pic,name';
        $where = [];
        $arrVal = [];
        $all_flg = 1;
        $r = $this->db->select($table, $column, $where, $arrVal, $all_flg);
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
        $r = $this->db->search($table, $column, $where, $arrVal, $switch);
        for ($i = 0; $i < 1; $i++) {
            $r = array_shift($r);
        }
        return $r;
    }
}
