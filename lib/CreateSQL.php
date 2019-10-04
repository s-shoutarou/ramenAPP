<?php
//未使用

namespace ramenApp\lib;

use ramenApp\lib\PDODatabase;

class CreateSQL
{
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
}
