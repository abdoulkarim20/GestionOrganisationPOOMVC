<?php
if (!empty($_GET['route'])) {
    switch ($_GET['route']) {
        case 'Region':
            require_once "./view/region/index.php";
            break;
        case 'User':
            require_once "./view/user/index.php";
            break;
        case 'Login':
            require_once "./view/authentification/index.php";
            break;
        case 'Organisation':
            require_once "./view/entreprise/index.php";
            break;
    }
}
