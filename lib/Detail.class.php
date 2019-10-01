<?php

namespace ramenApp\lib;

class Detail
{
    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getDetail($id)
    {
        $table = 'restaurants';
        $column = '*';
        $where = ['id'];
        $arrVal = [$id];
        $r = $this->db->select($table, $column, $where, $arrVal);
        for ($i = 0; $i < 1; $i++) {
            $r = array_shift($r);
        }
        return $r;
    }
}
