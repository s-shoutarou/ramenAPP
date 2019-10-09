<?php

namespace ramenApp\lib;


class Edit
{
    private $db = '';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function editing($postData, $user_id)
    {
        $table = "restaurants";
        $column = '';
        $arrVal = [];
        foreach ($postData as $key => $val) {
            $column .= $key . '=?,';
            array_push($arrVal, $val);
        }
        $column = substr($column, 0, -1);
        $where = [$user_id];
        $this->db->update($table, $column, $where, $arrVal);
    }
}
