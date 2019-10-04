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
        $col = 'user_name,delete_flg';
        $where = ['user_name'];
        $whereVal = [$user_name];
        $result = $this->db->select($table, $col, $where, $whereVal);

        $result = array_shift($result);

        if (!empty($result['user_name']) && $result['delete_flg'] == 0) {
            return false;
        }
        if (count($result['user_name']) == 1 && $result['delete_flg'] == 1) {
            //過去に登録していたユーザーなら復活
            $table = 'users';
            $column = 'id,pass';
            $where = ['user_name'];
            $arrVal = [$user_name];
            $result = $this->db->select($table, $column, $where, $arrVal);

            $hash_pass = $result[0]['pass'];
            $user_id = $result[0]['id'];
            if (password_verify($user_pass, $hash_pass)) {
                $table = 'users';
                $col = 'delete_flg';
                $where = ['id'];
                $whereVal = [$user_id];
                if ($this->db->accountManage($table, $col, $where, $whereVal)) {
                    $_SESSION['user_id'] = $user_id;
                    header('Location:http://localhost:8888/ramenApp/top.php');
                    exit();
                } else {
                    return 'エラー';
                }
            }
        }
        //新規ユーザー登録
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
