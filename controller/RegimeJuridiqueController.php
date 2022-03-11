<?php
require_once "./model/RegimeJuridiqueDAO.php";
class RegimeJuridiqueController
{
    public function affichageRegime()
    {
        $regime = new RegimeJuridiqueDAO();
        $data = $regime->getAll()->fetchAll();
        return $data;
    }
}
