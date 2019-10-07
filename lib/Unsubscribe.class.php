<?php

namespace ramenApp\lib;

use ramenApp\lib\PDOoperation;

class Unsubscribe
{
    private $db = null;
    private $PDOope = null;

    public function __construct($db)
    {
        $this->db = $db;
        $this->PDOope = new PDOoperation($this->db);
    }
    public function unsubscribe($user_name, $pass)
    {
        $table = 'users';
        $column = 'id,pass';
        $where = ['user_name'];
        $arrVal = [$user_name];
        $result = $this->db->select($table, $column, $where, $arrVal);

        $hash_pass = $result[0]['pass'];
        $user_id = $result[0]['id'];
        if (password_verify($pass, $hash_pass)) {
            $table = 'users';
            $col = 'delete_flg';
            $where = ['id'];
            $whereVal = [$user_id];
            $del_flg = 1;
            if ($this->PDOope->accountManage($table, $col, $where, $whereVal, $del_flg)) {
                header('Location:http://localhost:8888/ramenApp/logout.php');
                exit();
            } else {
                return '名前かパスワードが間違っています';
            }
        }
    }
}
