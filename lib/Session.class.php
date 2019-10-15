<?php

namespace ramenApp\lib;

class Session
{
    public function __construct()
    {
        ini_set('session.gx_maxlifetime', 60 * 60 * 24 * 30);
        ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30);
        session_start();
        session_regenerate_id();
    }

    public function flash()
    {
        if (!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            unset($_SESSION['flash']);
            return $flash;
        }
    }

    public function sessionCheck($user_id)
    {
        if (empty($user_id)) {
            header('Location:/ramenApp/top.php');
        }
    }
}
