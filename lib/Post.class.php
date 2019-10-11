<?php

namespace ramenApp\lib;

class Post
{
    private $db = '';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getSubData()
    {
        $table = [
            'tastes',
            'option_info',
            'price_range'
        ];
        $column = [
            'id,taste',
            'id,text',
            'id,price_text'
        ];
        $returnName = [
            'tastes',
            'option',
            'price_range'
        ];
        $where = [];
        $arrVal = [];

        $option = ['all_flg' => 1];
        for ($i = 0; $i < count($table); $i++) {
            $r = $this->db->select($table[$i], $column[$i], $where, $arrVal, $option);
            $r = array_shift($r);
            $r = array_reverse($r);
            $result[$returnName[$i]] = $r;
        }
        return $result;
    }


    /*   public function getPrefecture()
    {
        $table = 'prefecture';
        $column = 'id,name';
        $where = [];
        $arrVal = [];
        $option = ['all_flg' => 1];
        $r = $this->db->select($table, $column, $where, $arrVal, $option);
        $r = array_shift($r);
        $r = array_reverse($r);
        return $r;
    }
*/
    public function posting($pic = '', $name = '', $address = '', $taste = '', $price = '', $text = '', $user_id = '', $options = [])
    {
        $table = 'restaurants';
        $column = 'pic,name,address,taste,price,introduction,user,';
        $arrVal = [$pic, $name, $address, $taste, $price, $text, $user_id];

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
