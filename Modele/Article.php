<?php


class Article{
    private $id_article;
    private $titre;
    private $article;
    private $date;

    public function __construct($id_article, $titre, $article, $date)
    {
        $this->id_article=$id_article;
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
