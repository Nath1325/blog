<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 13/01/2019
 * Time: 13:46
 */

class CommentaireController
{
    public function __construct(string $action){
        $this->showUserAction($action);
    }

    private function showUserAction(string $action){

        switch($action){

            case "poster" :
                $username = $_POST['usernameCommentaire'];
                $message = $_POST['message'];
                $id_article = $_GET['article'];
                $c = new Commentaire();
                $c->posterCommentaire($id_article,$username,$message);
                break;
        }
    }
}