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
            $sql = $this->dbc->prepare("INSERT INTO users (nom,prenoms,username,motPass) VALUES(?,?,?,?)");
            return $sql->execute([$user->getNom(), $user->getPrenoms(), $user->getUsername(), $user->getMotPass()]);
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
    }
    public function update(User $user)
    {
        try {
            $sql = $this->dbc->prepare("UPDATE users SET nom=? , prenoms=? , username=? , motPass=? WHERE idUser=? ");
            return $sql->execute([$user->getNom(), $user->getPrenoms(), $user->getUsername(), $user->getMotPass(), $user->getIdUser()]);
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
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

    public function delete($idUser)
    {
        $sql = $this->dbc->prepare("DELETE FROM users WHERE idUser=?");
        $sql->execute([$idUser]);
        return $sql;
    }
    
}
