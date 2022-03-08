<?php
require_once "./model/User.php";
require_once "./model/UserDAO.php";
$user = new User();
$userDAO = new UserDAO();
//Je cree ici une sessession pour u'user
if (!empty($_POST['username']) && !empty($_POST['motPass'])) {
    $username = $_POST['username'];
    $motPass = $_POST['motPass'];
    $userSession = $userDAO->createSession('username', $username, 'motPass', $motPass);
    $data = $userSession->fetch();
    if ($data) {
        $_SESSION['idUser'] = $data['idUser'];
        $_SESSION['nom'] = $data['nom'];
        $_SESSION['prenoms'] = $data['prenoms'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['motPass'] = $data['motPass'];
        header("Location:http://localhost/GestionOrganisation");
    } else {
        echo " <script>
             alert('Username ou mot de passe inncorrect');
             document.location.href='connexion.php';
             </script>";
        die();
    }
}


