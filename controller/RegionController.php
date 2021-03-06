<?php
require_once "./model/Region.php";
require_once "./model/RegionDAO.php";
$region = new Region();
$regionDAO = new RegionDAO();

$regions = $regionDAO->getAll();

if (!empty($_GET['idRegion'])) {
    $idRegion = $_GET['idRegion'];
    $regionEdit = $regionDAO->getOne('idRegion', $idRegion);
    $data = $regionEdit->fetch(PDO::FETCH_ASSOC);
}

//Je fais le traitement pour la mise a jours en regardans si tous les champs sont rempli
function dataTraitement()
{
    if (!empty($_POST['nomRegion'])) {
        return true;
    } else {
        false;
    }
}
//maintant je vais saisire les donnees dans la tables
if (dataTraitement()) {
    $region->setNomRegion($_POST['nomRegion']);
}
if (dataTraitement() && !empty($_POST['idRegion'])) {
    $region->setIdRegion($_POST['idRegion']);
    $regionDAO->update($region);
    echo "<script> 
    alert ('Modification reussie');
    document.location.href='./?route=Region&module=list';
    </script>";
} else if (dataTraitement()) {
    if (!empty($_POST['nomRegion'])) {
        $nomRegion = $_POST['nomRegion'];
        $regionEdit = $regionDAO->getOne('nomRegion', $nomRegion);
        $data = $regionEdit->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            echo "<script> 
        alert ('La region existe deja');
        document.location.href='./?route=Region&module=add';
        </script>";
            die();
        } else {
            $regionDAO->add($region);
            echo "<script> 
            alert ('Region ajouter');
            document.location.href='./?route=Region&module=list';
            </script>";
        }
    }
}
