<?php
require_once "./utils/Formulaire.php";
require_once "./controller/EntrepriseController.php";
require_once "./controller/QuartieController.php";
$quartier = new QuartierController();
$data = $quartier->affichageQuartier();

$entrepriseController = new EntrepriseController();
$entrepriseController->ajouter();
$form = new Formulaire();

var_dump($_POST);
?>

<div class="mb-5 col-lg-6">
    <div class="card card-outline">
        <div class="card-header bg-blue">
            <h5 class="text-white m-b-0">Formulaire au reponse au questions d'enquettes</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <?php
                $form->divForm("Nom de l’entreprise", "text", "", "nomEntreprise");
                $form->divForm("Coordonnée GPS", "text", "", "conrdonneeGPS");
                $form->divForm("Siège Social", "text", "", "siegeSociale");
                $form->divForm("Quelle est la date de création de votre entreprise ?", "date", "", "dateCreation");
                $form->divForm("registre de commerce", "text", "", "registreCommerce");
                $form->divForm("NINEA", "text", "", "NINEA");
                $form->divForm("Page Web de votre entreprise", "text", "", "pageWeb");
                ?>
                <div>
                    <div>
                        <label>Quel est le nombre d'employées? :</label>
                        <select class="form-select" name="nombreEmployer">
                            <option value="1 a 5">1 a 5</option>
                            <option value="5 a 15">5 a 15</option>
                            <option value="plus">plus</option>
                        </select>
                    </div>
                    <div>
                        <label>Ont-ils des contrats formel? :</label>
                        <select class="form-select" name="contratFormel">
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                    <div>
                        <label>Existe t-il un organigramme claire et respecté ? :</label>
                        <select class="form-select" name="organigrammeRespecter">
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                    <div>
                        <label>Existe t-il un dispositif de formation du personnel ? :</label>
                        <select class="form-select" name="dispositifFormation">
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                    <div>
                        <label>Votre entreprise prend-elle en compte les quotisations sociales et patronale ? :</label>
                        <select class="form-select" name="questionSociale">
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                </div>
                <div>
                    <!-- <label>Quartier ? :</label> -->
                    <select class="form-select" name="fk_idQuartier">
                        <option selected class="form-group">Quartier ou se trouve l'entreprise</option>
                        <?php foreach ($data as $key) { ?>
                            <option value="<?= $key['idQuartier']; ?>"><?= $key['nomQuartier']; ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
        </div>
    </div>
</div>