<?php

include_once (__DIR__.'/../DAL/ArticleGateway.php');

class Article {

    var $table = 'articles';

    public function getAll(){
            $gt = new ArticleGateway();
            return $gt->FindAll();
    }

    public function getArticle($id){
        $gt = new ArticleGateway();
        return $gt->FindById($id);
    }

    public function posterArticle($id_user,$titre,$article,$date){
        $gt = new ArticleGateway();
        $gt->insert($id_user,$titre,$article,$date);

    }

    public function getAuteur($id_article){
        $gt = new ArticleGateway();
    }

}
