<?php
function giveAccess()
{
    $_SESSION['username'];
    $_SESSION['motPass'];
    if (!($_SESSION['username']) && !($_SESSION['motPass'])) {
        header("Location:connexion.php");
        die();
    }
    $_SESSION['motPass'];
    $_SESSION['nom'];
    $_SESSION['prenoms'];
    $_SESSION['username'];
    $_SESSION['motPass'];
}
