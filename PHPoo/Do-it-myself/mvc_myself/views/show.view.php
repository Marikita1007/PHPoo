<?php

ob_start(); ?>

    <a href="?op=new" class="btn btn-primary">ajouter un employe</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">苗字</th>
            <th scope="col">名前</th>
            <th scope="col">給料</th>
            <th colspan="2">アクション</th>
        </tr>
        </thead>
        <?php foreach ($donnees as $employe) : ?>
            <tr>
                <td><?= $employe->id_employe ?></td>
                <td><?= $employe->prenom ?></td>
                <td><?= $employe->nom ?></td>
                <td><?= $employe->salaire ?></td>
                <td><a href="?op=edit&id=<?= $employe->id_employe ?>" class="btn btn-primary">変更</a></td>
                <td><a href="?op=delete&id=<?= $employe->id_employe ?>" class="btn btn-danger">削除</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php
$content = ob_get_clean();
$title = "従業員リスト";
require('html_template.view.php');