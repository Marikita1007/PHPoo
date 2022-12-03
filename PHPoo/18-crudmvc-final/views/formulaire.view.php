<?php
ob_start();
?>
<!-- Formulaire qui va servir aussi bien pour l'insertion que la modification-->

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

<?php
$content = ob_get_clean();
$titre = "Formulaire";
require('template.view.php');