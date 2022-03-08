<?php
require_once "User.php";
class UserDAO
{
    private $dbc;
    public function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    public function add(User $user)
    {
        try {
            $sql = $this->dbc->prepare("INSERT INTO regions (nom,prenoms,username,password) VALUES(?,?,?,?)");
            $sql->bindParam(1, $nom);
            $sql->bindParam(2, $prenoms);
            $sql->bindParam(3, $username);
            $sql->bindParam(4, $password);
            return $sql->execute([$user->getnom(), $user->getPrenoms(), $user->getUsername(), $user->getPassword()]);
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
    }
    public function update(User $user)
    {
        $sql = $this->dbc->prepare("UPDATE users SET nom=? AND prenoms=? AND username=? AND password=? WHERE idUser=? ");
        return $sql->execute([$user->getnom(), $user->getPrenoms(), $user->getUsername(), $user->getPassword(), $user->getIdUser()]);
    }

    public function getAll()
    {
        $sql = $this->dbc->prepare("SELECT * FROM users ORDER BY idUser DESC");
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function getOne($coloneName, $value)
    {
        $sql = $this->dbc->prepare("SELECT * FROM users WHERE " . $coloneName . "=?");
        $sql->execute([$value]);
      
        return $sql;
    }
}
