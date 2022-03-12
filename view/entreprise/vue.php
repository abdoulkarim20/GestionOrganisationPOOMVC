<?php
require_once "./controller/EntrepriseController.php";
$data = new EntrepriseController();
$detail = $data->detailEntreprise();
// print_r($detail);
?>
<div class="info-box">
    <h4 style="font-weight: bold;" class="text-black mb-3">Les responses fournies par <?= $detail['nomCompletRepondant'] ?></h4>
    <h6 style="font-weight: bold;">Nom de l'entreprise: <span style="font-weight: normal;"><?= $detail['nomEntreprise'] ?></span></h6>
    <h6 style="font-weight: bold;">Coordonnée GPS: <span style="font-weight: normal;"><?= $detail['conrdonneeGPS'] ?></span></h6>
    <h6 style="font-weight: bold;">Région: <span style="font-weight: normal;"><?= $detail['nomRegion'] ?></span></h6>
    <h6 style="font-weight: bold;">Départment: <span style="font-weight: normal;"><?= $detail['nomDepartement'] ?></span></h6>
    <h6 style="font-weight: bold;">Commune: <span style="font-weight: normal;"><?= $detail['nomCommune'] ?></span></h6>
    <h6 style="font-weight: bold;">Quartier/Village: <span style="font-weight: normal;"><?= $detail['nomQuartier'] ?></span></h6>
    <h6 style="font-weight: bold;">Siège Social: <span style="font-weight: normal;"><?= $detail['siegeSociale'] ?></span></h6>
    <h6 style="font-weight: bold;">Nom et Prénom du Répondant: <span style="font-weight: normal;"><?= $detail['nomCompletRepondant'] ?></span></h6>
    <h6 style="font-weight: bold;">Fonction du répondant: <span style="font-weight: normal;"><?= $detail['fonctionRepondant'] ?></span></h6>
    <h6 style="font-weight: bold;">Numero du repondant: <span style="font-weight: normal;"><?= $detail['telephoneRepondant'] ?></span></h6>
    <h6 style="font-weight: bold;">Le courriel du répondant: <span style="font-weight: normal;"><?= $detail['emailRepondant'] ?></span></h6>
    <h6 style="font-weight: bold;">la date de création de votre entreprise: <span style="font-weight: normal;"><?= $detail['dateCreation'] ?></span></h6>
    <h6 style="font-weight: bold;">Quel est le régime juridique de votre entreprise ?: <span style="font-weight: normal;"><?= $detail['libelleRegime'] ?></span></h6>
    <h6 style="font-weight: bold;">registre de commerce: <span style="font-weight: normal;"><?= $detail['registreCommerce'] ?></span></h6>
    <h6 style="font-weight: bold;">NINEA: <span style="font-weight: normal;"><?= $detail['NINEA'] ?></span></h6>
    <h6 style="font-weight: bold;">Dans quels domaines se situent les services de votre entreprise ?: <span style="font-weight: normal;"><?= $detail['nomDomaine'] ?></span></h6>
    <h6 style="font-weight: bold;">Page Web: <span style="font-weight: normal;"><?= $detail['pageWeb'] ?></span></h6>
    <h6 style="font-weight: bold;">Quel est le nombre d'employées?: <span style="font-weight: normal;"><?= $detail['nombreEmployer'] ?></span></h6>
    <h6 style="font-weight: bold;">Ont-ils des contrats formel?: <span style="font-weight: normal;"><?= $detail['contratFormel'] ?></span></h6>
    <h6 style="font-weight: bold;">Existe t-il un organigramme claire et respecté ?: <span style="font-weight: normal;"><?= $detail['organigrammeRespecter'] ?></span></h6>
    <h6 style="font-weight: bold;">Existe t-il un dispositif de formation du personnel ?: <span style="font-weight: normal;"><?= $detail['dispositifFormation'] ?></span></h6>
    <h6 style="font-weight: bold;">Votre entreprise prend-elle en compte les quotisations sociales et patronale ?: <span style="font-weight: normal;"><?= $detail['questionSociale'] ?></span></h6>
    <a class="btn btn-danger my-4" href="?route=Organisation&module=list">Retour</a>
</div>