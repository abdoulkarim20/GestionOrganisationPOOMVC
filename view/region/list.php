<?php
require_once "./model/Region.php";
require_once "./model/RegionDAO.php";
require_once "./controller/RegionController.php";

?>
<div class="info-box">
    <h4 class="text-black">La liste des regions</h4>
    <div class="table-responsive">
        <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
            <thead>
                <tr>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom de la Region</th>
                    <th scope="col" colspan="2" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($regions as $region) { ?>
                    <tr>
                        <td><?= $region['idRegion']; ?></td>
                        <td><?= $region['nomRegion']; ?></td>
                        <td class="text-center"><a href="?route=Region&module=edit&idRegion=<?= $region['idRegion']; ?>"><i class="bi bi-pencil-square" style="color: primary; font-size:1.5rem;"></i></a></td>
                        <td class="text-center"><a href="?route=Region&module=delete&idRegion=<?= $region['idRegion']; ?>"><i class="bi bi-trash3" style="color: #ce0033; font-size:1.5rem;"></i></a></td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>