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


    public function login($user_name, $db_pass)
    { }

    public function createSQL($type = '', $table = '', $column = '', $where = [], $all_flg = 0)
    {
        switch ($type) {
            case 'select':
                $where_txt = [];
                foreach ($where as $key => $val) {
                    array_push($where_txt, $val . '=?');
                }
                $where_txt = implode($where_txt, ',');
                if ($all_flg === 0) {
                    $sql = 'SELECT ' . $column . ' FROM ' . $table . ' WHERE ' . $where_txt;
                } elseif ($all_flg === 1) {
                    $sql = 'SELECT ' . $column . ' FROM ' . $table;
                }
                $this->sqlLOG($sql);
                return $sql;
        }
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
