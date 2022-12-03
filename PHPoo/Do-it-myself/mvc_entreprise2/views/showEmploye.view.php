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
                </tr>
                </thead>

                    <tr>
                        <td><?= $employe->id_employes ?></td>
                        <td><?= $employe->prenom ?></td>
                        <td><?= $employe->nom ?></td>
                        <td><?= $employe->sexe ?></td>
                        <td><?= $employe->service ?></td>
                        <td><?= $employe->date_embauche ?></td>
                        <td><?= $employe->salaire ?></td>
                        <td><?= $employe->id_secteur ?></td>
                        <a href="?op=list" >Return</a>
                    </tr>
            </table>
        </div>
    </div>


    </body>
    </html>
<?php
$content = ob_get_clean();
$title = "Emplyee List";
require ('template.view.php');
