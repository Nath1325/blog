<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 11/01/2019
 * Time: 21:10
 */

include_once (__DIR__.'/../modele/Article.php');
include_once (__DIR__.'/../modele/User.php');
include_once (__DIR__.'/../modele/Connection.php');
include_once (__DIR__.'/../controller/UserController.php');
include_once (__DIR__.'/../controller/ArticleController.php');

class FrontController
{

    public function __construct() {
        session_start();
        try {
            $this->chooseAction();
        }
        catch(PDOException $exception){
            echo "Probleme BDD:";
            echo $exception;
        }
    }

    private function chooseAction()
    {
        if (isset($_REQUEST['action'])) {
            $action = $_REQUEST['action'];
        }

        if (empty($action)) {
            $article = new Article();
            $articles = $article->getAll();
            require(__DIR__ . '/../view/Acceuil.php');
        }
        else {
            $this->showAction($action);

        }
    }

    private function afficherBDD(){
        $article = new Article();
        $articles = $article->getAll();
        require(__DIR__ . '/../view/Acceuil.php');
    }

    private function showAction ( string $action ){

        switch ($action){

            case "acceuil" :
                require(__DIR__.'/../view/Acceuil.php');
                break;


            case "showArticle" :
                $id = $_GET['article'];
                $a = new Article();
                $article = $a->getArticle($id);
                require(__DIR__ . '/../view/Article.php');
                break;

            case "connection" :
                require(__DIR__.'/../view/Connexion.php');
                break;

            case "login":
                new UserController("login");
                $this->afficherBDD();
                break;

            case "logout" :
                new UserController("logout");
                $this->afficherBDD();
                break;

            case "poster" :
                require(__DIR__.'/../view/Poster.php');
                break;

            case "submit" :
                new ArticleController("submit");
                $this->afficherBDD();
                break;




        }
    }



}