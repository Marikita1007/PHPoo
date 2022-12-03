<?php

ob_start(); ?>

    <a href="?op=new" class="btn btn-primary">ajouter un employe</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Salaire</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <?php foreach ($donnees as $employe) : ?>
            <tr>
                <td><?= $employe->id_employe ?></td>
                <td><?= $employe->prenom ?></td>
                <td><?= $employe->nom ?></td>
                <td><?= $employe->salaire ?></td>
                <td><a href="?op=edit&id=<?= $employe->id_employe ?>" class="btn btn-primary">Modifier</a></td>
                <td><a href="?op=delete&id=<?= $employe->id_employe ?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php
$content = ob_get_clean();
$titre = "Liste des employes";
require('template.view.php');