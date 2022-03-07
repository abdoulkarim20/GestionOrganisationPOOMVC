<?php
if (!empty($_GET['module'])) {
    switch ($_GET['module']) {
        case 'logout':
            require_once "deconnexion.php";
            break;
        case 'login':
            require_once "connexion.php";
            break;
        case 'list':
            require_once "list.php";
            break;
        default:
            echo "<h1>Error 404</h1>";
            break;
    }
}
