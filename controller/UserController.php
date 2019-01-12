<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 12/01/2019
 * Time: 13:55
 */

class UserController
{

    public function __construct(string $action){
        $this->showUserAction($action);
    }

    private function showUserAction(string $action){

        switch($action){

            case "logout" :
                session_unset();;
                break;

            case "login" :
                $username = $_POST['username'];
                $mdp = $_POST['password'];
                $user = new User();
                if ($user->exist($mdp,$username)) {
                    $_SESSION['login'] = $username;
                }

        }
    }


}