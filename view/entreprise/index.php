<?php
if (!empty($_GET['module'])) {
    switch ($_GET['module']) {
        case 'add':
            require_once "add.php";
            break;
        case 'edit':
            require_once "edit.php";
            break;
        case 'list':
            require_once "list.php";
            break;
        case 'delete':
            require_once "delete.php";
            break;
            case 'vue':
                require_once "vue.php";
                break;
        default:
            echo "<h1>Error 404</h1>";
            break;
    }
}
