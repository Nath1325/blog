<?php
/**
 * Created by PhpStorm.
 * User: nakrulic
 * Date: 01/12/18
 * Time: 10:09
 */


class Validation{

    public static function ValidEmail($email){
        $var= filter_var($email,FILTER_VALIDATE_EMAIL);

    }

    public static function ValidString($pseudo){
        $var=filter_var($pseudo,FILTER_sE);
    }
}