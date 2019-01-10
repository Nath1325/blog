<?php
/**
 * Created by PhpStorm.
 * User: nakrulic
 * Date: 08/12/18
 * Time: 10:35
 */

require('models/User.php');

class UserGateway{
    private $dsn ='mysql:host=localhost;dbname=dbnakrulic';
    private $user = "root";
    private $password = "";
    private $con;

    public function insert($nom,$prenom,$speudo,$mail,$mdp){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
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
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM User where id_user=?';
        $this->con->executeQuery($query,
            [1=>[$id,PDO::PARAM_INT]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindByNom($nom){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM User where nom=?';
        $this->con->executeQuery($query,
            [1=>[$nom,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindByPseudo($pseudo){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM User where pseudo=?';
        $this->con->executeQuery($query,
            [1=>[$pseudo,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindByPassword($password){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM User where mdp=?';
        $this->con->executeQuery($query,
            [1=>[$password,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }


    public function FindByPrenom($prenom){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM User where prenom=?';
        $this->con->executeQuery($query,
            [1=>[$prenom,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindByEmail($mail){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM User where mail=?';
        $this->con->executeQuery($query,
            [1=>[$mail,PDO::PARAM_STR]]
        );
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function FindAll(){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
        $query= 'SELECT * FROM User ';
        $this->con->executeQuery($query);
        $resultat= $this->con->getResultsTableau();
        return $resultat;
    }

    public function Update($id, $nom ,$prenom ,$pseudo,$mail,$mot_de_passe){
        $this->con = new Connection($this->dsn,$this->user,$this->password);
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