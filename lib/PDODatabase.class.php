<?php

namespace ramenApp\lib;

use PDOException;

class PDODatabase
{
    private $dbh = null;
    private $DB_HOST = '';
    private $DB_NAME = '';
    private $DB_USER = '';
    private $DB_PASS = '';

    private $LOG_PATH = '';

    public function __construct($db_host, $db_name, $db_user, $db_pass, $log_path)
    {
        $this->dbh = $this->dbConnect($db_host, $db_name, $db_user, $db_pass, $log_path);
        $this->DB_HOST = $db_host;
        $this->DB_NAME = $db_name;
        $this->DB_USER = $db_user;
        $this->DB_PASS = $db_pass;

        $this->LOG_PATH = $log_path;
    }

    private function dbConnect($db_host, $db_name, $db_user, $db_pass)
    {
        try {
            $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name;
            $dbh = new \PDO($dsn, $db_user, $db_pass);
            $dbh->query('SET NAMES UTF8');
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
            exit();
        }
        return $dbh;
    }

    public function getDbh()
    {
        return $this->dbh;
    }

    public function select($table, $column, $where = [], $arrVal = [], $option = ['all_flg' => 0])
    {
        $sql = $this->createSQL('select', $table, $column, $where, $option);
        $stmt = $this->dbh->prepare($sql);
        $data = [];
        if ($stmt->execute($arrVal) && $option['all_flg'] == 0) {
            while ($result = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                array_push($data, $result);
            }
        } elseif ($stmt->execute($arrVal) && $option['all_flg'] == 1) {
            while ($result = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
                array_push($data, $result);
            }
        }
        return $data;
    }

    public function insert($table, $column, $val = [])
    {
        $prst = [];
        $valcount = count($val);
        for ($i = 0; $i < $valcount; $i++) {
            array_push($prst, '?');
        }
        $prst = implode($prst, ',');
        $sql = 'INSERT INTO ' . $table . ' (' . $column . ' ) VALUES (' . $prst . ' )';
        $this->sqlLOG($sql);
        $stmt = $this->dbh->prepare($sql);
        if (!$stmt->execute($val)) {
            $this->catchError($stmt->errorInfo());
        } else {
            return true;
        }
    }

    public function update($table = '', $column = '', $where = [], $arrVal = [])
    {
        $sql = $this->createSQL('update', $table, $column, $where);
        $stmt = $this->dbh->prepare($sql);
        if ($stmt->execute($arrVal)) {
            header('Location:myrestaurant.php');
        } else {
            $this->catchError($stmt->errorInfo());
        }
    }

    public function createSQL($type = '', $table = '', $column = '', $where = [], $option = [])
    {
        switch ($type) {
            case "select":
                $where_txt = [];
                foreach ($where as $key => $val) {
                    array_push($where_txt, $val . '=?');
                }
                $where_txt = implode($where_txt, ' AND ');
                if ($option["all_flg"] == 0) {
                    $sql = 'SELECT ' . $column . ' FROM ' . $table . ' WHERE ' . $where_txt;
                    $this->sqlLOG('select:' . $sql);
                } elseif ($option["all_flg"] == 1) {
                    $sql = 'SELECT ' . $column . ' FROM ' . $table . ' ORDER BY id DESC';
                    $this->sqlLOG('select:' . $sql);
                }
                break;
            case "search":
                $like_text = [];
                for ($i = 0; $i < $option['searchVal']; $i++) {
                    array_push($like_text, ' ?');
                }
                if (($option['searchVal']) == 1) {
                    $where = array_shift($where);
                    $sql = 'SELECT ' . $column . ' FROM ' . $table . ' WHERE ' . $where . ' LIKE ?';
                    $this->sqlLOG('search・OneThing:' . $sql);
                } elseif ($option['searchSwitch'] == 0) {
                    $where = array_shift($where);
                    $like_text = implode($like_text, ' AND ' . $where . ' LIKE');
                    $sql = 'SELECT ' . $column . ' FROM ' . $table . ' WHERE ' . $where . ' LIKE' . $like_text . ' ORDER BY id DESC';
                    $this->sqlLOG('search・AND:' . $sql);
                } elseif ($option['searchSwitch'] == 1) {
                    $where = array_shift($where);
                    $like_text = implode($like_text, ' OR ' . $where . ' LIKE');
                    $sql = 'SELECT ' . $column . ' FROM ' . $table . ' WHERE ' . $where . ' LIKE' . $like_text . ' ORDER BY id DESC';
                    $this->sqlLOG('search・OR:' . $sql);
                }
                break;
            case 'update':
                $where_txt = array_shift($where);
                $sql = 'UPDATE ' . $table . ' SET ' . $column . ' WHERE id=' . $where_txt;
                break;
        }

        $this->sqlLOG('ResultSQL:' . $sql);
        return $sql;
    }


    public function catchError($errArr = [])
    {
        $errMSG = (!empty($errArr)) ? $errArr[2] : '';
        die('SQLエラーが起きました' . $errMSG);
    }

    public function sqlLOG($text)
    {
        if (!file_exists($this->LOG_PATH)) {
            mkdir('/Applications/MAMP/htdocs/ramenApp/log', 0777);
            touch($this->LOG_PATH);
        }
        $text = sprintf("[日時:%s]クエリ内容:%s\n", date('Y-m-d H:i:s'), $text);
        $this->writingLOG($text);
    }
    public function writingLOG($text)
    {
        error_log($text, 3, $this->LOG_PATH);
    }
}
