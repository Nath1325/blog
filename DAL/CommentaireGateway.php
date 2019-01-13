<?php
/**
 * Created by PhpStorm.
 * User: nakrulic
 * Date: 01/12/18
 * Time: 08:18
 */

//require('models/Article.php');

class CommentaireGateway{
    private $dsn ='mysql:host=localhost;dbname=dbnakrulic';
    private $user = "root";
    private $password = "";
    private $con;

   /* public function __construct(Connection $con)
    {
            $this->con=$con;
    }*/

    public function insert($id_article,$username,$contenu){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query = 'INSERT INTO commentaire VALUES (NULL,:id_article, :id_user,:contenu)'; // NULL car Id autoincrement
        $this->con->executeQuery($query,array(
            ':id_article'=> array($id_article,PDO::PARAM_INT),
            ':id_user'=> array($username,PDO::PARAM_STR),
            ':contenu'=> array($contenu,PDO::PARAM_STR),
        ));
        return $this->con->lastInsertId();
    }




    public function FindByIdArticle($id){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM commentaire where id_article=?';
        $this->con->executeQuery($query,
            [1=>[$id,PDO::PARAM_INT]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }


/*
    public function DeleteById($id){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'DELETE FROM News where id_article=?';
        $this->con->executeQuery($query,
            [1=>[$id,PDO::PARAM_INT]]
        );
    }

    public function FindByTitre($titre){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM News where titre=?';
        $this->con->executeQuery($query,
            [1=>[$titre,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindByDate($date){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM News where date_publication=?';
        $this->con->executeQuery($query,
            [1=>[$date,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindAll(){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM News';
        $this->con->executeQuery($query);
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function Update($id,$titre,$article){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'UPDATE News SET article=:article, titre=:titre WHERE id_article=:id';
        $this->con->executeQuery($query,array(
            ':article'=> array($article,PDO::PARAM_STR),
            ':titre'=> array($titre,PDO::PARAM_STR),
            'id'=> array($id,PDO::PARAM_INT),
        ));
    }
    */




}