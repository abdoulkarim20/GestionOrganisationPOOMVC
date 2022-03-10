<?php
require_once "./model/QuartierDAO.php";
require_once "./model/Quartier.php";
class QuartierController
{
    public function affichageQuartier()
    {
        $quartier = new QuartierDAO();
        $data=$quartier->getAll()->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
