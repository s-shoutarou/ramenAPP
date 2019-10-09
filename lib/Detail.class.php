<?php

namespace ramenApp\lib;

use ramenApp\lib\PDOoperation;

class Detail
{
    private $db = null;
    private $PDOope = null;

    public function __construct($db)
    {
        $this->db = $db;
        $this->PDOope = new PDOoperation($db);
    }

    public function getDetail($id)
    {
        $table = 'restaurants';
        $column = '*';
        $where = ['id'];
        $arrVal = [$id];
        $r = $this->PDOope->getDataDetail($table, $column, $where, $arrVal);
        for ($i = 0; $i < 1; $i++) {
            $r = array_shift($r);
        }
        return $r;
    }
}
