<?php
require_once "./utils/DataBaseHelper.php";
require_once "Repondant.php";
class RepondantDAO
{
    private $dbc;
    function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    public function getAll()
    {
        $sql = $this->dbc->prepare("SELECT * FROM repondants");
        $sql->execute();
        return $sql;
    }
}
