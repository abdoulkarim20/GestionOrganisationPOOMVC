<?php
class RegimeJuridiqueDAO
{
    private $dbc;
    function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    public function getAll()
    {
        $sql = $this->dbc->prepare("SELECT * FROM regimeJuridiques");
        $sql->execute();
        return $sql;
    }
}
