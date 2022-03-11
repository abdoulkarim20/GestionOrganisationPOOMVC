<?php
require_once "./model/DomaineDAO.php";
require_once "./model/Quartier.php";
class DomaineController
{
    public function affichageDomaine()
    {
        $domaine = new DomaineDAO();
        $data=$domaine->getAll()->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
