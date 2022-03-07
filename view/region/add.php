<?php
require_once "./controller/RegionController.php";
require_once "./utils/Formulaire.php";
$form = new Formulaire();
?>

<div class="mb-5 col-lg-12">
    <div class="card card-outline">
        <div class="card-header bg-blue">
            <h5 class="text-white m-b-0">Ajouter une region</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <?php
                $form->divForm("Nom de la region", "text", "", "nomRegion");
                // $form->divForm("Superficie de la region", "text", "", "nomRegion");
                ?>
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
        </div>
    </div>
</div>