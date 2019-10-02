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

    public function select($table, $column, $where = [], $arrVal = [], $all_flg = 0)
    {
        $sql = $this->createSQL('select', $table, $column, $where, $all_flg);
        $stmt = $this->dbh->prepare($sql);
        $data = [];
        if ($stmt->execute($arrVal) && $all_flg == 0) {
            while ($result = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                array_push($data, $result);
            }
        } elseif ($stmt->execute($arrVal) && $all_flg == 1) {
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

    public function createSQL($type = '', $table = '', $column = '', $where = [], $all_flg = 0, $searchSwitch = 0, $searchVal = [])
    {
        if ($type == 'select') {
            $where_txt = [];
            foreach ($where as $key => $val) {
                array_push($where_txt, $val . '=?');
            }
            $where_txt = implode($where_txt, ' AND ');
            if ($all_flg === 0) {
                $sql = 'SELECT ' . $column . ' FROM ' . $table . ' WHERE ' . $where_txt;
                $this->sqlLOG('select:' . $sql);
            } elseif ($all_flg === 1) {
                $sql = 'SELECT ' . $column . ' FROM ' . $table . ' ORDER BY id DESC';
                $this->sqlLOG('select:' . $sql);
            }
        } elseif ($type == 'search') {
            $like_text = [];
            for ($i = 0; $i < count($searchVal); $i++) {
                array_push($like_text, ' ?');
            }
            if (count($searchVal) == 1) {
                $where = array_shift($where);
                $sql = 'SELECT ' . $column . ' FROM ' . $table . ' WHERE ' . $where . ' LIKE ?';
                $this->sqlLOG('search・OneThing:' . $sql);
            } elseif ($searchSwitch == 0) {
                $where = array_shift($where);
                $like_text = implode($like_text, ' AND ' . $where . ' LIKE');
                $sql = 'SELECT ' . $column . ' FROM ' . $table . ' WHERE ' . $where . ' LIKE' . $like_text . ' ORDER BY id DESC';
                $this->sqlLOG('search・AND:' . $sql);
            } elseif ($searchSwitch == 1) {
                $where = array_shift($where);
                $like_text = implode($like_text, ' OR ' . $where . ' LIKE');
                $sql = 'SELECT ' . $column . ' FROM ' . $table . ' WHERE ' . $where . ' LIKE' . $like_text . ' ORDER BY id DESC';
                $this->sqlLOG('search・OR:' . $sql);
            }
        }
        $this->sqlLOG('ResultSQL:' . $sql);
        return $sql;
    }

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


    private function catchError($errArr = [])
    {
        $errMSG = (!empty($errArr)) ? $errArr[2] : '';
        die('SQLエラーが起きました' . $errMSG);
    }

    private function sqlLOG($text)
    {
        $text = sprintf("[日時:%s]クエリ内容:%s\n", date('Y-m-d H:i:s'), $text);
        $this->writingLOG($text);
    }
    public function writingLOG($text)
    {
        error_log($text, 3, $this->LOG_PATH);
    }
}
