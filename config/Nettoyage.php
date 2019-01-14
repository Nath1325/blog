<?php
/**
 * Created by PhpStorm.
 * User: AM
 * Date: 14/01/2019
 * Time: 11:53
 */

class Nettoyage
{
    //Supprime les balises/caractères spéciaux
    public static function str_clean_V1(string $s){
        if (!isset($s)) {
            return false;
        }
        return filter_var($s, FILTER_SANITIZE_STRING);
    }

    //V1 + n'encode pas les quotes
    public static function str_clean_V2(string $s){
        if (!isset($s)) {
            return false;
        }
        return filter_var($s, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    }

    public static function url_clean(string $s)
    {
        if (!isset($s)) {
            return false;
        }
        return filter_var($s, FILTER_SANITIZE_URL);
    }



}