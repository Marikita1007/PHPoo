<?php
require_once ('Class.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Employe</title>
</head>
<body>

<div class="container">

    <h2>Emplyes</h2>

    <form action="" method="post">

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" value="<?= $current->nom ?? '' ?>"><br> <!--J'affiche le contenu de la
    variable $current si elle existe sinon je n'affiche rien
     -->

        <label for="prenom">Prenom</label><br>
        <input type="text" id="prenom" name="prenom" value="<?= $current->prenom ?? '' ?>" ><br>

        <label for="salaire">Salaire</label><br>
        <input type="number" min=0 id="salaire" name="salaire" value="<?= $current->salaire ?? '' ?>" ><br>

        <input type="submit" value="enregistrer" class="btn btn-primary">
        <a href="?op=list" >Retour</a>
    </form>
</div>
<div>
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
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>