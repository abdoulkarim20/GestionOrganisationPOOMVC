<?php
require_once "./model/User.php";
require_once "./model/UserDAO.php";
require_once "./controller/UserController.php";

?>
<div class="info-box">
    <h4 class="text-black">La liste des Utilisateurs</h4>
    <div class="table-responsive">
        <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
            <thead>
                <tr>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenoms</th>
                    <th scope="col">Username</th>
                    <th scope="col" colspan="2" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?= $user['idUser']; ?></td>
                        <td><?= $user['nom']; ?></td>
                        <td><?= $user['prenoms']; ?></td>
                        <td><?= $user['username']; ?></td>
                        <td class="text-center"><a href="?route=User&module=edit&idUser=<?= $user['idUser']; ?>"><i class="bi bi-pencil-square" style="color: primary; font-size:1.5rem;"></i></a></td>
                        <td class="text-center"><a href="?route=User&module=delete&idUser=<?= $user['idUser']; ?>"><i class="bi bi-trash3" style="color: #ce0033; font-size:1.5rem;"></i></a></td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>