<?php
require_once "./model/User.php";
require_once "./model/UserDAO.php";
$user = new User();
$userDAO = new UserDAO();
$users = $userDAO->getAll();


if (!empty($_GET['idUser'])) {
    $idUser = $_GET['idUser'];
    $userEdit = $userDAO->getOne('idUser', $idUser);
    $data = $userEdit->fetch(PDO::FETCH_ASSOC);
}

//Je fais le traitement pour la mise a jours en regardans si tous les champs sont rempli
function dataTraitement()
{
    if (
        !empty($_POST['nom']) &&
        !empty($_POST['prenoms']) &&
        !empty($_POST['username']) &&
        !empty($_POST['password'])
    ) {
        return true;
    } else {
        false;
    }
}
//maintant je vais saisire les donnees dans la tables
if (dataTraitement()) {
    $user->setINom($_POST['nom']);
    $user->setIPrenoms($_POST['prenoms']);
    $user->setIUsername($_POST['username']);
    $user->setIPassword($_POST['password']);
}
if (dataTraitement() && !empty($_POST['idUser'])) {
    $user->setIdUser($_POST['idUser']);
    $userDAO->update($user);
    echo "<script> 
    alert ('Utilisateur modifier reussie');
    document.location.href='./?route=User&module=list';
    </script>";
    // header('Location:./?route=Region&module=list');
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
