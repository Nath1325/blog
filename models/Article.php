<?php


class Article extends ArticleGateway {
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



    /**
     * @return mixed
     */
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


    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

}
