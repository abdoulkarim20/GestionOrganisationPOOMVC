<?php
require_once "./model/User.php";
require_once "./model/UserDAO.php";
$user = new User();
$userDAO = new UserDAO();
$users = $userDAO->getAll();

//ici pour recuperer l'id qui es venu par l'url;
if (!empty($_GET['idUser'])) {
    $idUser = $_GET['idUser'];
    $userEdit = $userDAO->getOne('idUser', $idUser);
    $data = $userEdit->fetch(PDO::FETCH_ASSOC);
    // print_r($data);
}

//Je fais le traitement pour la mise a jours en regardans si tous les champs sont rempli
function dataTraitement()
{
    if (
        !empty($_POST['nom']) &&
        !empty($_POST['prenoms']) &&
        !empty($_POST['username']) &&
        !empty($_POST['motPass'])
    ) {
        return true;
    } else {
        false;
    }
}
//maintant je vais saisire les donnees dans la tables
if (dataTraitement()) {
    $user->setNom($_POST['nom']);
    $user->setPrenoms($_POST['prenoms']);
    $user->setUsername($_POST['username']);
    $user->setMotPass($_POST['motPass']);
}
if (dataTraitement() && !empty($_POST['idUser'])) {
    $user->setidUser($_POST['idUser']);
    $userDAO->update($user);
    echo "<script> 
    alert ('Utilisateur modifier reussie');
    document.location.href='./?route=User&module=list';
    </script>";
    // header('Location:./?route=Region&module=list');
} else if (dataTraitement()) {
    if (!empty($_POST['username'])) {
        $username = $_POST['username'];
        $usernameAdd = $userDAO->getOne('username', $username);
        $data = $usernameAdd->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            echo "<script> 
        alert ('Utilisateur existe deja');
        document.location.href='./?route=User&module=add';
        </script>";
            die();
        } else {
            $userDAO->add($user);
            echo "<script> 
            alert ('Utilisateur ajouter');
            document.location.href='./?route=User&module=list';
            </script>";
        }
    }
}
