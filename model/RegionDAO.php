<?php
require_once "Region.php";
class RegionDAO
{
    private $dbc;
    public function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    //La methode qui va me permettre de faire ajout
    public function add(Region $region)
    {
        try {
            $sql = $this->dbc->prepare("INSERT INTO regions (nomRegion) VALUES(?)");
            $sql->bindParam(1, $nomRegion);
            return $sql->execute([$region->getNomRegion()]);
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
    }
    //La methode pour update de region
    public function update(Region $region)
    {
        try {
            $sql = $this->dbc->prepare("UPDATE regions SET nomRegion=? WHERE idRegion=?");
            return $sql->execute([$region->getNomRegion(), $region->getIdRegion()]);
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
    }
    //La methode recupere toutes les regions
    public function getAll()
    {
        try {
            $sql = $this->dbc->prepare("SELECT * FROM regions ORDER BY idRegion ASC");
            $sql->execute();
            $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
    }
    //La methodes de suppression d'une regions
    public function deleteRegion($idRegion)
    {
        try {
            $sql = $this->dbc->prepare("DELETE FROM regions WHERE idRegion=?");
            return $sql->execute([$idRegion]);
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
    }
    //La methode qui recupere une region
    public function getOne($coloneName, $value)
    {
        $sql = $this->dbc->prepare("SELECT * FROM regions WHERE " . $coloneName . "=?");
        $sql->execute([$value]);
        return $sql;
    }
}
