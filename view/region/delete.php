<?php
require_once "./controller/RegionController.php";
$regionsSup = $_GET['idRegion'];
$data = $regionDAO->deleteRegion($regionsSup);
if ($data) {
    echo "<script> 
    alert ('Suppression effectuee avec reussie');
        document.location.href='?route=Region&module=list';
    </script>";
}
