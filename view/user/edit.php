<?php
require_once "./controller/UserController.php";
require_once "./utils/Formulaire.php";
$form = new Formulaire();
?>

<div class="mb-5 col-lg-12">
    <div class="card card-outline">
        <div class="card-header bg-blue">
            <h5 class="text-white m-b-0">Modifier un Utilisateur</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <input type="hidden" class="form-control" name="idUser" value="<?= $data['idUser'] ?>">
                <?php
                $form->divForm("Nom de l'utilisateur", "text", $data['nom'], "nom");
                $form->divForm("Prenoms de l'utilisateur", "text", $data['prenoms'], "prenoms");
                $form->divForm("Username", "email", $data['username'], "username");
                $form->divForm("Mot de passe", "text", $data['motPass'], "motPass");
                ?>
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
</div>