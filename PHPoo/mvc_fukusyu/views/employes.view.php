<?php


//ob_start();のおかげで下記がtemplate.views.phpに表示される！
//foreach ($donnees as $employe):
ob_start();?>

    <a href="?op=new" class="btn btn_primary">Ajouter un employe</a>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Salaire</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <?php foreach($data as $employe) :?>
            <tr>
                <td><?= $employe->id_employe ?></td>
                <td><?= $employe->prenom ?></td>
                <td><?= $employe->nom ?></td>
                <td><?= $employe->salaire ?></td>
                <td><a href="?op=edit?id=<?= $employe->id_employe ?>" class="btn btn-primary">Modifier</a></td>
                <td><a href="?op=delete?id=<?= $employe->id_employe ?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
        <?php endforeach;?>
    </table>

<?php
$content = ob_get_clean();
$titre = "Liste des employes";
//ここに'template.views.php'があるから上の表はここ（つまりタイトルの下）に表示される
require ('template.view.php');