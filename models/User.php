<?php
/**
 * Created by PhpStorm.
 * User: nakrulic
 * Date: 08/12/18
 * Time: 09:38
 */

class User extends UserGateway
{
    private $password;


    public function exist($password,$pseudo) {
        echo $password,$pseudo;
        if (empty($this->FindByPassword($password))) return false;
        if (empty($this->FindByPseudo($pseudo))) return false;
        return true;

    }

}
   /*
    private $id_user;
    private $nom;
    private $prenom;
    private $pseudo;
    private $mail;
    private $mdp;


    private function __construct($id_user, $nom, $prenom, $pseudo, $mail, $mdp)
    {
        $this->id_user=$id_user;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->pseudo=$pseudo;
        $this->mail=$mail;
        $this->mdp=$mdp;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }


    public function getPseudo()
    {
        return $this->pseudo;
    }


    public function getMail()
    {
        return $this->mail;
    }

    public function getUserSession(){
        $array = array($this->getNom(),$this->getPrenom(),$this->getPseudo(),$this->getMail());
        return $array;
    }


} */