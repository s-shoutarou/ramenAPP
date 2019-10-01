<?php

namespace ramenApp\lib;

class Signup
{
    private $db = null;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function signup($user_name, $user_pass)
    { //まず被りチェック
        $table = 'users';
        $col = 'user_name';
        $where = ['user_name', 'delete_flg'];
        $whereVal = [$user_name, 0];
        $name = $this->db->select($table, $col, $where, $whereVal);

        if (!empty($name)) {
            return false;
        }

        $pass = password_hash($user_pass, PASSWORD_DEFAULT);
        $col = 'user_name,pass';
        $val = [$user_name, $pass];
        $result = $this->db->insert('users', $col, $val);

        //セッションに詰めるIDを取得する
        $table = 'users';
        $col = 'id';
        $where = ['user_name'];
        $whereVal = [$user_name];
        $result = $this->db->select($table, $col, $where, $whereVal);
        $_SESSION['user_id'] = $result[0]['id'];
        return true;
    }
}
