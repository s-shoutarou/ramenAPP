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
}
