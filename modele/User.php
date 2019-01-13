<?php
/**
 * Created by PhpStorm.
 * User: nakrulic
 * Date: 08/12/18
 * Time: 09:38
 */

include_once (__DIR__.'/../DAL/UserGateway.php');

class User
{

    public function exist($password,$pseudo){
        $gt = new UserGateway();
        if ( empty($result = $gt->existInDB($password,$pseudo))) {
            return false;
        }
        else {
            return true;
        }
    }

    public function getId ($username){
        $gt = new UserGateway();
        return $gt->FindByPseudo($username);
    }

}
