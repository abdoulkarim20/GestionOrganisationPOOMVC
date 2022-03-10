<?php
require_once "./controller/EntrepriseController.php";
require_once "./model/EntrepriseDAO.php";
$idEntreprise = $_GET['idEntreprise'];
$eDAO = new EntrepriseDAO();
$data = $eDAO->deleteEntreprise($idEntreprise);
if ($data) {
    echo "<script> 
    alert ('Suppression effectuee avec reussie');
        document.location.href='?route=Organisation&module=list';
    </script>";
}
