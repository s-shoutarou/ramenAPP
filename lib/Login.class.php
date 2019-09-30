<?php

namespace ramenApp\lib;

class Login
{
    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function userLogin($user_name, $user_pass)
    {
        $table = 'users';
        $column = 'pass';
        $where = ['user_name'];
        $arrVal = [$user_name];
        $h_pass = $this->db->select($table, $column, $where, $arrVal);
        $hash_pass = array_shift($h_pass);
        if (password_verify($user_pass, $hash_pass['pass'])) {
            header('Location:http://localhost:8888/ramenApp/top.html');
            exit();
        } else {
            return false;
        }
    }
}
