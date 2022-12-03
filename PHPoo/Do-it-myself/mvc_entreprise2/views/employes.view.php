<?php
ob_start();
?>

<!-- 表示場所 -->
<div class="container">
    <div class="row">
    <a href="?op=new" class="btn btn-success" style="width: 100px">従業員追加</a>
        <table>
            <thead>
                <tr class="d_flex">
                    <th scope="col">#</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Service</th>
                    <th scope="col">Date Embauche</th>
                    <th scope="col">Salaire</th>
                    <th scope="col">ID Secteur</th>
                    <th scope="col">Button</th>
                    <th scope="col">Button</th>
                </tr>
            </thead>
            
            <?php foreach ($donnees as $employe) :

                ?>

                <tr>
                    <td><?= $employe->id_employes ?></td>
                    <td><?= $employe->prenom ?></td>
                    <td><?= $employe->nom ?></td>
                    <td><?= $employe->sexe ?></td>
                    <td><?= $employe->service ?></td>
                    <td><?= $employe->date_embauche ?></td>
                    <td><?= $employe->salaire ?></td>
                    <td><?= $employe->id_secteur ?></td>
                    <td><a href="?op=show&id=<?= $employe->id_employes ?>" class="btn btn-info">Show</a></td>
                    <td><a href="?op=edit&id=<?= $employe->id_employes ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="?op=delete&id=<?= $employe->id_employes ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>


</body>
</html>
<?php 
    $content = ob_get_clean();
    $title = "Emplyes List";
    //ここに'template.views.php'があるから上の表はここ（つまりタイトルの下）に表示される
    require ('template.view.php');
