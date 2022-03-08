<?php
class User
{
    private $idUser;
    private $nom;
    private $prenoms;
    private $username;
    private $motPass;
    //Les getters et setters
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }
    public function getIdUser()
    {
        return $this->idUser;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setPrenoms($prenoms)
    {
        $this->prenoms = $prenoms;
    }
    public function getPrenoms()
    {
        return $this->prenoms;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setMotPass($motPass)
    {
        $this->motPass = $motPass;
    }
    public function getMotPass()
    {
        return $this->motPass;
    }
}
