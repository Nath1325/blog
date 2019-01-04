<?php
/**
 * Created by PhpStorm.
 * User: nakrulic
 * Date: 01/12/18
 * Time: 08:18
 */

require('models/Article.php');

class ArticleGateway{
    private $con;
    public function __construct(Connection $con)
    {
            $this->con=$con;
    }

    public function insert($id_user,$titre,$article, $date){
        $query = 'INSERT INTO News VALUES (:id_user,NULL, :titre,:article,:date)'; // NULL car Id autoincrement
        $this->con->executeQuery($query,array(
            ':id_user'=> array($id_user,PDO::PARAM_INT),
            ':titre'=> array($titre,PDO::PARAM_STR),
            ':article'=> array($article,PDO::PARAM_STR),
            ':date'=> array($date,PDO::PARAM_STR),
        ));
        return $this->con->lastInsertId();
    }

    public function FindById($id){
        $query= 'SELECT * FROM News where id_article=?';
        $this->con->executeQuery($query,
            [1=>[$id,PDO::PARAM_INT]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function DeleteById($id){
        $query= 'DELETE FROM News where id_article=?';
        $this->con->executeQuery($query,
            [1=>[$id,PDO::PARAM_INT]]
        );
    }

    public function FindByTitre($titre){
        $query= 'SELECT * FROM News where titre=?';
        $this->con->executeQuery($query,
            [1=>[$titre,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindByDate($date){
        $query= 'SELECT * FROM News where date_publication=?';
        $this->con->executeQuery($query,
            [1=>[$date,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindAll(){
        $query= 'SELECT * FROM News';
        $this->con->executeQuery($query);
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function Update($id,$titre,$article){
        $query= 'UPDATE News SET article=:article, titre=:titre WHERE id_article=:id';
        $this->con->executeQuery($query,array(
            ':article'=> array($article,PDO::PARAM_STR),
            ':titre'=> array($titre,PDO::PARAM_STR),
            'id'=> array($id,PDO::PARAM_INT),
        ));
    }




}