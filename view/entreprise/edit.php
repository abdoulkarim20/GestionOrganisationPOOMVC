<?php
require_once "./controller/EntrepriseController.php";
require_once "./controller/QuartieController.php";
require_once "./controller/DomaineController.php";
require_once "./controller/RepondantController.php";
require_once "./controller/RegimeJuridiqueController.php";
$regimeController = new RegimeJuridiqueController();
$repondant = new RepondantDAO();
$domaine = new DomaineController();
$quartier = new QuartierController();
$quartiers = $quartier->affichageQuartier();
$domaines = $domaine->affichageDomaine();
$repondants = $repondant->getAll();
$regimes = $regimeController->affichageRegime();
$entrepriseController = new EntrepriseController();
$modif = $entrepriseController->EntrepriseModifier();
$entrepriseController->modification();
?>
<div class="mb-5 col-lg-6">
    <div class="card card-outline">
        <div class="card-header bg-blue">
            <h5 class="text-white m-b-0">Modifier une reponse au question d'enquette</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <input type="hidden" name="idEntreprise" value="<?= $modif['idEntreprise'] ?>">
                <?php
                $form->divForm("Nom de l’entreprise", "text", $modif['nomEntreprise'], "nomEntreprise");
                $form->divForm("Coordonnée GPS", "text", $modif['conrdonneeGPS'], "conrdonneeGPS");
                $form->divForm("Siège Social", "text", $modif['siegeSociale'], "siegeSociale");
                $form->divForm("Quelle est la date de création de votre entreprise ?", "date", $modif['dateCreation'], "dateCreation");
                $form->divForm("registre de commerce", "text", $modif['registreCommerce'], "registreCommerce");
                $form->divForm("NINEA", "text", $modif['NINEA'], "NINEA");
                $form->divForm("Page Web de votre entreprise", "text", $modif['pageWeb'], "pageWeb");
                ?>
                <div>
                    <div>
                        <label>Quel est le nombre d'employées? :</label>
                        <select class="form-select" name="nombreEmployer">
                            <option value="<?= $modif['nombreEmployer'] ?>" selected><?= $modif['nombreEmployer'] ?></option>
                            <option value="5 a 15">1 a 5</option>
                            <option value="5 a 15">5 a 15</option>
                            <option value="plus">plus</option>
                        </select>
                    </div>
                    <div>
                        <label>Ont-ils des contrats formel? :</label>
                        <select class="form-select" name="contratFormel">
                            <option value="<?= $modif['contratFormel'] ?>" selected><?= $modif['contratFormel'] ?></option>
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                    <div>
                        <label>Existe t-il un organigramme claire et respecté ? :</label>
                        <select class="form-select" name="organigrammeRespecter">
                            <option value="<?= $modif['organigrammeRespecter'] ?>" selected><?= $modif['organigrammeRespecter'] ?></option>
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                    <div>
                        <label>Existe t-il un dispositif de formation du personnel ? :</label>
                        <select class="form-select" name="dispositifFormation">
                            <option value="<?= $modif['dispositifFormation'] ?>" selected><?= $modif['dispositifFormation'] ?></option>
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                    <div>
                        <label>Votre entreprise prend-elle en compte les quotisations sociales et patronale ? :</label>
                        <select class="form-select" name="questionSociale">
                            <option value="<?= $modif['questionSociale'] ?>" selected><?= $modif['questionSociale'] ?></option>
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                        </select>
                    </div>
                </div>
                <div>
                    <select class="form-select" name="fk_idQuartier">
                        <option selected value="<?= $modif['fk_idQuartier'] ?>">Quartier ou se trouve l'entreprise</option>
                        <?php foreach ($quartiers as $key) { ?>
                            <option value="<?= $key['idQuartier']; ?>"><?= $key['nomQuartier']; ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div>
                    <select class="form-select" name="fk_idDomaine">
                        <option selected value="<?= $modif['fk_idDomaine'] ?>">Domaine d'activite de l'entreprise</option>
                        <?php foreach ($domaines as $val) { ?>
                            <option value="<?= $val['idDomaine']; ?>"><?= $val['nomDomaine']; ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div>
                    <select class="form-select" name="fk_idRepondant">
                        <option selected value="<?= $modif['fk_idRepondant'] ?>">Nom du repondant</option>
                        <?php foreach ($repondants as $val) { ?>
                            <option value="<?= $val['idRepondant']; ?>"><?= $val['nomCompletRepondant']; ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div>
                    <select class="form-select" name="fk_idRegimeJuridique">
                        <option selected value="<?= $modif['fk_idRegimeJuridique'] ?>">Regime juridique de l'entreprise</option>
                        <?php foreach ($regimes as $val) { ?>
                            <option value="<?= $val['idRegime']; ?>"><?= $val['libelleRegime']; ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
        </div>
    </div>
</div>