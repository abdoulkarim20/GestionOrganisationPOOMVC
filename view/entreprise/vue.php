<?php
require_once "./controller/EntrepriseController.php";
$data = new EntrepriseController();
$detail = $data->detailEntreprise();

?>
<div class="info-box">
    <h4 class="text-black">Les responses fournies dans les entreprises</h4>
    <div class="table-responsive">
        <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
            <thead>
                <tr>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom de l’entreprise</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Region</th>
                    <th scope="col">Departement</th>
                    <th scope="col">Commune</th>
                    <th scope="col">Quartier</th>
                    <th scope="col">Siège Social</th>
                    <th scope="col">Nom et Prénom du Répondant</th>
                    <th scope="col">Fonction du répondant</th>
                    <th scope="col">Telephone du repondant</th>
                    <th scope="col" colspan="3" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?= $detail['idEntreprise'] ?></td>
                    <td><?= $detail['nomEntreprise'] ?></td>
                    <td><?= $detail['dateCreation'] ?></td>
                    <td><?= $detail['nomRegion'] ?></td>
                    <td><?= $detail['nomDepartement'] ?></td>
                    <td><?= $detail['nomCommune'] ?></td>
                    <td><?= $detail['nomQuartier'] ?></td>
                    <td><?= $detail['siegeSociale'] ?></td>
                    <td><?= $detail['nomCompletRepondant'] ?></td>
                    <td><?= $detail['fonctionRepondant'] ?></td>
                    <td><?= $detail['telephoneRepondant'] ?></td>
                    <td class="text-center"><a href="?route=Organisation&module=vue&idEntreprise=<?= $detail['idEntreprise']; ?>"><i class="bi bi-eye-fill" style="color: primary; font-size:1.5rem;"></i></a></td>
                    <td class="text-center"><a href="?route=Organisation&module=edit&idEntreprise=<?= $detail['idEntreprise']; ?>"><i class="bi bi-pencil-square" style="color: primary; font-size:1.5rem;"></i></a></td>
                    <td class="text-center"><a href="?route=Organisation&module=delete&idEntreprise=<?= $detail['idEntreprise']; ?>"><i class="bi bi-trash3" style="color: #ce0033; font-size:1.5rem;"></i></a></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>