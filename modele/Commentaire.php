<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 13/01/2019
 * Time: 13:46
 */

include_once (__DIR__.'/../DAL/CommentaireGateway.php');

class Commentaire
{

    public function getAllById ($id) {

        $gt = new CommentaireGateway();
        return $gt->FindByIdArticle($id);

    }

    public function posterCommentaire($id_article,$username,$message){
        $gt = new CommentaireGateway();
        $gt->insert($id_article,$username,$message);

    }


}