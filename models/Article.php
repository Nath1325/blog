<?php


class Article extends ArticleGateway {

    var $table = 'articles';

    public function getAll(){
            return $this->FindAll();
    }

    /*
    private $id_article;
    private $id_user;
    private $titre;
    private $article;
    private $date;

    public function __construct($id_article,$id_user, $titre, $article, $date)
    {
        $this->id_article=$id_article;
        $this->id_user=$id_user;
        $this->article=$article;
        $this->titre = $titre;
        $this->date = $date;
    }




    public function getIdArticle()
    {
        return $this->id_article;
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }



    public function setArticle($article)
    {
        $this->article = $article;
    }


    public function getTitre()
    {
        return $this->titre;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }
    */
}
