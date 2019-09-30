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
    {
        $pass = password_hash($user_pass, PASSWORD_DEFAULT);
        $col = 'user_name,pass';
        $val = [$user_name, $pass];
        $result = $this->db->insert('users', $col, $val);
        return $result;
    }
}
