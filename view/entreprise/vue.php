<?php
require_once "./model/EntrepriseDAO.php";
$enDao = new EntrepriseDAO();
if (!empty($_GET['idEntreprise'])) {
    $idEntreprise = $_GET['idEntreprise'];
    $detail=$enDao->getOne('idEntreprise',$idEntreprise)->fetch();
    print_r($detail);
}
