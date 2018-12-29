<?php
/**
 * Created by PhpStorm.
 * User: nakrulic
 * Date: 08/12/18
 * Time: 09:38
 */

class User
{
    private $nom;
    private $prenom;
    private $pseudo;
    private $mail;
    private $mdp;
    private $isAdmin;

    private function __construct($nom, $prenom, $pseudo, $mail, $mdp)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->pseudo=$pseudo;
        $this->mail=$mail;
        $this->mdp=$mdp;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    public function getUserSession(){
        $array = array($this->getNom(),$this->getPrenom(),$this->getPseudo(),$this->getMail());
        return $array;
    }


}