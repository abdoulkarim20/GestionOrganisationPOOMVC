<?php
require_once "./controller/UserController.php";
require_once "./utils/Formulaire.php";
$form = new Formulaire();
var_dump($_POST);
?>

<div class="mb-5 col-lg-12">
    <div class="card card-outline">
        <div class="card-header bg-blue">
            <h5 class="text-white m-b-0">Ajouter un Utilisateur</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <?php
                $form->divForm("Nom de l'utilisateur", "text", "", "nom");
                $form->divForm("Prenoms de l'utilisateur", "text", "", "prenoms");
                $form->divForm("Username", "email", "", "username");
                $form->divForm("Mot de passe", "password", "", "motPass");
                ?>
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
        </div>
    </div>
</div>