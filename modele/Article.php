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

}
