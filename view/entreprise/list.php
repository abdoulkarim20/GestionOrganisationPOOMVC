<?php
require_once "./controller/EntrepriseController.php";
$data = new EntrepriseController();
$data = $data->allReponse();


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
                    <th scope="col">Quartier/ Village</th>
                    <th scope="col">Siège Social</th>
                    <th scope="col">Nom et Prénom du Répondant</th>
                    <th scope="col">Fonction du répondant</th>
                    <th scope="col">Telephone du repondant</th>
                    <th scope="col" colspan="3" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key) { ?>
                    <tr>
                        <td><?= $key['idEntreprise'] ?></td>
                        <td><?= $key['nomEntreprise'] ?></td>
                        <td><?= $key['dateCreation'] ?></td>
                        <td><?= $key['nomQuartier'] ?></td>
                        <td><?= $key['siegeSociale'] ?></td>
                        <td><?= $key['nomCompletRepondant'] ?></td>
                        <td><?= $key['fonctionRepondant'] ?></td>
                        <td><?= $key['telephoneRepondant'] ?></td>
                        <td class="text-center"><a href="?route&module=delete&i="><i class="bi bi-trash3" style="color: #ce0033; font-size:1.5rem;"></i></a></td>
                        <td class="text-center"><a href="?route&module=edit&i="><i class="bi bi-pencil-square" style="color: primary; font-size:1.5rem;"></i></a></td>
                        <td class="text-center"><a href="?route&module=delete&i="><i class="bi bi-trash3" style="color: #ce0033; font-size:1.5rem;"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>