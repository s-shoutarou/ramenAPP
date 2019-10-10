<?php

namespace ramenApp\lib;

class Post
{
    private $db = '';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getTaste()
    {
        $table = 'tastes';
        $column = 'id,taste';
        $where = [];
        $arrVal = [];
        $option = ['all_flg' => 1];
        $r = $this->db->select($table, $column, $where, $arrVal, $option);
        $r = array_shift($r);
        $r = array_reverse($r);
        return $r;
    }

    public function getOption()
    {
        $table = 'option_info';
        $column = 'id,text';
        $where = [];
        $arrVal = [];
        $option = ['all_flg' => 1];
        $r = $this->db->select($table, $column, $where, $arrVal, $option);
        $r = array_shift($r);
        $r = array_reverse($r);
        return $r;
    }

    public function posting($pic = '', $name = '', $address = '', $taste = '', $text = '', $user_id = '', $options = [])
    {
        $table = 'restaurants';
        $column = 'pic,name,address,taste,introduction,user,';
        $arrVal = [$pic, $name, $address, $taste, $text, $user_id];

        $options = array_shift($options);

        if (!empty($options)) {
            foreach ($options as $key => $val) {
                if (is_numeric($key)) {
                    $key += 1;
                    $key = 'option_id' . $key;
                }
                $column .= $key . ',';
                array_push($arrVal, $val);
            }
        }
        $column = substr($column, 0, -1);
        if ($this->db->insert($table, $column, $arrVal)) {
            $_SESSION['flash'] = '投稿に成功しました!';
            header('Location:http://localhost:8888/ramenApp/top.php');
            exit();
        } else {
            echo 'ミスってます';
        }
    }
}
