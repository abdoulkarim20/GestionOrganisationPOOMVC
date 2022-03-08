<?php
class User
{
    private $idUser;
    private $nom;
    private $prenoms;
    private $username;
    private $password;
    //Les getters et setters
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }
    public function getIdUser()
    {
        return $this->idUser;
    }
    public function setINom($nom)
    {
        $this->nom = $nom;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function setIPrenoms($prenoms)
    {
        $this->prenoms = $prenoms;
    }
    public function getPrenoms()
    {
        return $this->prenoms;
    }
    public function setIUsername($username)
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setIPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
}
