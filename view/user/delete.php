<?php
require_once "./controller/UserController.php";
require_once "./utils/Formulaire.php";
$userAsupprimer = $_GET['idUser'];
$data = $userDAO->delete($userAsupprimer);
if ($data) {
    echo "<script> 
    alert ('Suppression effectuee avec reussie');
        document.location.href='?route=User&module=list';
    </script>";
}
