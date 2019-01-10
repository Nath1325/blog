<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 09/01/2019
 * Time: 10:16
 */

class Connexion extends controller
{

    function index(){
        $this->render('connexion');
    }

    function onConnect() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $this->loadModel('User');

        echo $this->User->exist($password,$username);



    }
}