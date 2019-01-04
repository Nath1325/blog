<?php
/**
 * Created by PhpStorm.
 * User: nakrulic
 * Date: 08/12/18
 * Time: 10:35
 */

require('models/User.php');

class UserGateway{
    private $con;
    public function __construct(Connection $con)
    {
        $this->con=$con;
    }

    public function insert($nom,$prenom,$speudo,$mail,$mdp){
        $query = 'INSERT INTO User VALUES (NULL, :nom,:prenom,:pseudo, :mail, :mot_de_passe)'; // NULL car Id autoincrement
        $this->con->executeQuery($query,array(
            ':nom'=> array($nom,PDO::PARAM_STR),
            ':prenom'=> array($prenom,PDO::PARAM_STR),
            ':pseudo'=> array($speudo,PDO::PARAM_STR),
            ':mail'=> array($mail,PDO::PARAM_STR),
            ':mot_de_passe'=> array($mdp,PDO::PARAM_STR),
        ));
        return $this->con->lastInsertId();
    }

    public function FindById($id){
        $query= 'SELECT * FROM User where id_user=?';
        $this->con->executeQuery($query,
            [1=>[$id,PDO::PARAM_INT]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindByNom($nom){
        $query= 'SELECT * FROM User where nom=?';
        $this->con->executeQuery($query,
            [1=>[$nom,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindByPrenom($prenom){
        $query= 'SELECT * FROM User where prenom=?';
        $this->con->executeQuery($query,
            [1=>[$prenom,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindByEmail($mail){
        $query= 'SELECT * FROM User where mail=?';
        $this->con->executeQuery($query,
            [1=>[$mail,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindAll(){
        $query= 'SELECT * FROM User ';
        $this->con->executeQuery($query);
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function Update($id, $nom ,$prenom ,$pseudo,$mail,$mot_de_passe){
        $query= 'UPDATE User SET nom=:nom, prenom=:prenom, pseudo=:pseudo, mail=:mail, mot_de_passe=:mot_de_passe WHERE id_user=:id';
        $this->con->executeQuery($query,array(
            ':nom'=> array($nom,PDO::PARAM_STR),
            ':prenom'=> array($prenom,PDO::PARAM_STR),
            'id'=> array($id,PDO::PARAM_INT),
            'pseudo'=> array($pseudo,PDO::PARAM_INT),
            'mail'=> array($mail,PDO::PARAM_INT),
            'mot_de_passe'=> array($mot_de_passe,PDO::PARAM_INT),
        ));
    }



}