<?php
require_once "./model/RepondantDAO.php";
class RepondantController
{
    public function affichageRepondant()
    {
        $repondant = new RepondantDAO();
        $data = $repondant->getAll()->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
