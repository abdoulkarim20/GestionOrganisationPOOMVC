<?php
session_start();
require_once "controller/AuthentificationController.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once "pages/header.php"; ?>

<body class="loginBackgroud">
    <div class="mt-5 container">
        <div class="">
            <div class="login-box-body">
                <h3 class="login-box-msg">Authentification</h3>
                <form action="" method="POST">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control sty1" name="username" placeholder="Nom d'utilisateur">
                    </div>
                    <div class="form-group has-feedback">
                        <input type="motPass" class="form-control sty1" name="motPass" placeholder="Mot de passe">
                    </div>
                    <div>
                        <div class="col-xs-4 m-t-1">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Se Connecter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <?php require_once "pages/js.php"; ?>
</body>

</html>