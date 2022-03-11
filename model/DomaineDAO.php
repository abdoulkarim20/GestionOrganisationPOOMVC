<?php
require_once "./utils/DataBaseHelper.php";
// require_once "Domaine.php";
class DomaineDAO
{
    private $dbc;
    function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    public function getAll()
    {
        $sql = $this->dbc->prepare("SELECT * FROM domaines ORDER BY idDomaine ASC");
        $sql->execute();
        return $sql;
    }
}
