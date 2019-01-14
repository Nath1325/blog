<?php
/**
 * Created by PhpStorm.
 * User: AM
 * Date: 14/01/2019
 * Time: 11:33
 */

class Validation
{
    public static function email_valid(string $s) : bool {
        if (!isset($s)) {
            return false;
        }
        return !!filter_var($s, FILTER_VALIDATE_EMAIL);
    }

    public static function username_valid(string $s) : bool{
        if(isset($s)){
            return false;
        }
        $regex="/^[ A-Za-z0-9_-]{5,50}$/";
        return !!filter_var(
            $s, FILTER_VALIDATE_REGEXP,
            array(
            "options" => array ("regexp" => $regex)));
    }

    public static function password_valid(string $s) : bool{
        if(isset($s)){
            return false;
        }
        $regex = "/^[A-Za-z0-9()\[\]\+\-_?!&~,:;\*\/\\\.]{5,50}$/";
        return !!filter_var(
            $s, FILTER_VALIDATE_REGEXP,
            array(
                "options" => array ("regexp" => $regex)));
    }

    public static function url_valid(string $s) : bool{
        if(isset($s)){
            return false;
        }
        $regex = "/^[A-Za-z0-9()\[\]\+\-_?!&~,:;\*\/\\\.]{5,50}$/";
        return !!filter_var($s, FILTER_VALIDATE_EMAIL);
    }

}