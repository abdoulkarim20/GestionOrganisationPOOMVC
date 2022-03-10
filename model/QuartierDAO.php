<?php
require_once "./utils/DataBaseHelper.php";
require_once "Quartier.php";
class QuartierDAO
{
    private $dbc;
    function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    public function getAll(){
        $sql=$this->dbc->prepare("SELECT * FROM quartiers q,communes c WHERE q.fk_idCommune=c.idCommune");
        $sql->execute();
        $data=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
