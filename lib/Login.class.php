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
        $column = 'id,pass';
        $where = ['user_name', 'delete_flg'];
        $arrVal = [$user_name, 0];
        $result = $this->db->select($table, $column, $where, $arrVal);

        if (!empty($result)) {
            $hash_pass = $result[0]['pass'];
            $user_id = $result[0]['id'];
        } else {
            return false;
        }

        if (password_verify($user_pass, $hash_pass)) {
            $_SESSION['user_id'] = $user_id;
            header('Location:http://localhost:8888/ramenApp/top.php');
            exit();
        } else {
            return false;
        }
    }
}
