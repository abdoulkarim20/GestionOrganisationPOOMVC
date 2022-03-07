<?php
if (!empty($_GET['route'])) {
    switch ($_GET['route']) {
        case 'Region':
            require_once "./view/region/index.php";
            break;
        case 'Authentification':
            require_once "./view/authentification/index.php";
            break;
    }
}
