<?php

namespace ramenApp\lib;

class Functions
{
    public function loginCheck()
    {
        if (!empty($_SESSION['user_id'])) {
            header('Location:/ramenApp/top.php');
        }
    }

    public function unsubscribeLoginCheck()
    {
        if (empty($_SESSION['user_id'])) {
            header('Location:/ramenApp/top.php');
        }
    }

    public function EmptyCheck($user_name, $pass)
    {
        $context = [];

        if (empty($user_name)) {
            $context['emptyname'] = '名前を入力してください';
        };

        if (empty($pass)) {
            $context['emptypass'] = 'パスワードを入力してください';
        };

        if (!empty($context)) {
            return $context;
        }
    }

    public function emptyCheckPost($post)
    {
        $context = [];
        $err_msg = ['name' => '名前', 'address' => '住所', 'taste' => '味', 'introduction' => '感想'];
        foreach ($post as $key => $val) {
            if (empty($post[$key])) {
                $context['empty' . $key] = $err_msg[$key] . 'を入力してください';
            }
        }
        return $context;
    }

    public function picUpload($file)
    {
        $pic = array_shift($file);

        if ($type = exif_imagetype($pic['tmp_name'])) {
            $fname = sha1_file($pic['tmp_name']) . date("Y-m-dH:i:s") . image_type_to_extension($type);
        };
        move_uploaded_file($pic['tmp_name'], './pic/' . $fname);
        return $fname;
    }
    //以下未使用
    public function search($table, $column, $where, $arrVal = [], $searchSwitch = 0, $all_flg = 0)
    {
        $data = [];
        $sql = $this->createSQL('search', $table, $column, $where, $all_flg, $searchSwitch, $arrVal);
        $stmt = $this->dbh->prepare($sql);
        foreach ($arrVal as $key => $val) {
            array_push($data, '%' . $val . '%');
        }
        $resultData = [];
        if ($stmt->execute($data)) {
            while ($result = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
                array_push($resultData, $result);
            }
        } else {
            $this->catchError($stmt->errorInfo());
        }
        return $resultData;
    }

    public function accountManage($table, $column, $where, $whereVal, $del_flg = 0)
    {
        $where_txt = [];
        foreach ($where as $key => $val) {
            array_push($where_txt, $val . '=?');
        }
        $where_txt = implode($where_txt, ' AND ');
        $sql = 'UPDATE ' . $table . ' SET ' . $column . ' = ' . $del_flg . ' WHERE ' . $where_txt;
        $this->sqlLOG($sql);
        $stmt = $this->dbh->prepare($sql);
        if ($stmt->execute($whereVal)) {
            return true;
        } else {
            return false;
        }
    }
}
