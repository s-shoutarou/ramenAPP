<?php

namespace ramenApp\lib;

class PDOoperation
{
    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function search($table, $column, $where, $arrVal = [], $option = ['searchSwitch' => 0])
    {
        $data = [];
        $option = array_merge($option, array('searchVal' => count($arrVal)));

        $sql = $this->db->createSQL('search', $table, $column, $where, $option);
        $stmt = $this->db->getDbh()->prepare($sql);
        foreach ($arrVal as $key => $val) {
            array_push($data, '%' . $val . '%');
        }
        $resultData = [];
        if ($stmt->execute($data)) {
            while ($result = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
                array_push($resultData, $result);
            }
        } else {
            $this->db->catchError($stmt->errorInfo());
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
        $this->db->sqlLOG($sql);
        $stmt = $this->db->getDbh()->prepare($sql);
        if ($stmt->execute($whereVal)) {
            return true;
        } else {
            return false;
        }
    }

    public function getDataDetail($table, $column, $where, $arrVal)
    {
        $sql = 'SELECT ' . $column . ' FROM ' . $table
            . ' INNER JOIN tastes ON ' . $table . '.taste = tastes.id WHERE ' . $table . '.id=?';
        $this->db->sqlLOG($sql);
        $stmt = $this->db->getDbh()->prepare($sql);
        $resultData = [];
        if ($stmt->execute($arrVal)) {
            while ($result = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
                array_push($resultData, $result);
            }
        } else {
            $this->db->catchError($stmt->errorInfo());
        }
        $resultData = array_shift($resultData);
        return $resultData;
    }

    public function getDataOption($table, $column, $where, $arrVal)
    {
        $resultData = [];
        $returnData = [];
        for ($i = 0; $i < 10; $i++) {
            $in = $i + 1;
            $sql = 'SELECT ' . $column . ' FROM ' . $table
                . ' INNER JOIN option_info ON ' . $table . '.option_id' . $in . ' = option_info.id WHERE ' . $table . '.id=?';
            $this->db->sqlLOG($sql);
            $stmt = $this->db->getDbh()->prepare($sql);
            if ($stmt->execute($arrVal)) {
                while ($result = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
                    array_push($resultData, $result);
                }
            } else {
                $this->db->catchError($stmt->errorInfo());
            }
            if (!empty($resultData)) {
                $rd = array_shift($resultData);
                $rd = array_shift($rd);
                $returnData[$i] = $rd['text'];
            }
        }
        return $returnData;
    }
}
