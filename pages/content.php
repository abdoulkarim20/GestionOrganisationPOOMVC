<?php
if (!empty($_GET['route'])) {
    switch ($_GET['route']) {
        case 'Region':
            require_once "./view/region/index.php";
            break;
        case 'User':
            require_once "./view/user/index.php";
            break;
    }
}
