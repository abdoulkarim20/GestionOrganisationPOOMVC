<?php
if (!empty($_POST)) {
    $dbc  = new PDO('mysql:host=localhost;dbname=POO_MVC_PHP;charset=utf8', 'root', 'Fooly@1251');
    $sql = $dbc->prepare("SELECT * FROM users WHERE username=:username AND motPass=:motPass");
    $sql->execute([
        'username' => $_POST['username'],
        'motPass' => $_POST['motPass']
    ]);
    $admin = $sql->fetch();
    if ($admin) {
        session_start();
        $_SESSION['motPass'] = $admin['motPass'];
        $_SESSION['nom'] = $admin['nom'];
        $_SESSION['prenoms'] = $admin['prenoms'];
        $_SESSION['username'] = $admin['username'];
        $_SESSION['motPass'] = $admin['motPass'];
        header("Location:http://localhost/GestionOrganisation");
    } else {
        echo " <script>
             alert('Username ou mot de passe inncorrect');
             document.location.href='connexion.php';
             </script>";
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once "pages/header.php"; ?>

<body class="loginBackgroud">
    <div class="mt-5 container">
        <div class="">
            <div class="login-box-body">
                <h3 class="login-box-msg">Authentification</h3>
                <form action="" method="post">
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