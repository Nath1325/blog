<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 13/01/2019
 * Time: 10:29
 */

include_once (__DIR__.'/../modele/User.php');
include_once (__DIR__.'/../modele/Article.php');

class ArticleController
{
    public function __construct(string $action){
        $this->showUserAction($action);
    }

    private function showUserAction(string $action){

        switch($action){

            case "submit" :
                $titre = $_POST['titre'];
                $article = $_POST['article'];
                $date = date('Y-m-d ', time());
                $u = new User();
                $id_user = $u->getId($_SESSION['login']);
                $a = new Article();
                $a->posterArticle($id_user,$titre,$article,$date);
                break;

            case "showArticle":
                $id = $_GET['article'];
                if (isset($_GET['commentaire'])) {
                    new CommentaireController("poster");

                }
                $a = new Article();
                $c = new Commentaire();
                $commentaires = $c->getAllById($id);
                $article = $a->getArticle($id);
                require(__DIR__ . '/../view/Article.php');
                break;
        }

    }

}