<?php
/**
 * Created by PhpStorm.
 * User: Pawara
 * Date: 10/4/2019
 * Time: 11:14 AM
 */

class Session{

    public static function init()
    {
        @session_start();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    public static function destroy()
    {
        session_destroy();
    }
}