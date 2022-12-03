<?php

ob_start();
?>
    <!-- Formulaire qui va servir aussi bien pour l'insertion que la modification-->
    <!--挿入と修正の両方に使用されるフォーム-->

<form action="" method="post">employes

    <label for="">Nom</label><br>
    <input type="text" id="nom" name="nom" value="<?= $current->nom ?? '' ?>"><br>
    <!--J'affiche le contenu de la variable $current si elle existe sinon je n'affiche rien -->
    <!--  $currenの内容を表示します。 変数があればそれを表示し、なければ何も表示しません。 -->

    <label for="">Prenom</label><br>
    <input type="text" id="prenom" name="prenom" value="<?= $current->prenom ?? '' ?>"><br>

    <label for="">Salaire</label><br>
    <input type="number" id="salaire" name="salaire" value="<?= $current->salaire ?? '' ?>"><br>

    <input type="submit" value="enregistrer" class="btn btn-primary"><br>
    <a href="?op=list">Retour</a><br>
</form>

<?php

$content = ob_get_clean();
$titre = "Formulaire";
require ('template.view.php');