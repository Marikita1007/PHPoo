<?php

ob_start();

?>

    <form action="" method="post">

        <label for="">Nom</label><br>
        <input type="text" id="nom" name="nom"><br>

        <label for="">Prenom</label><br>
        <input type="text" id="prenom" name="prenom"><br>

        <label for="">Salaire</label><br>
        <input type="number" id="salaire" name="salaire"><br>

        <input type="submit" value="enregistrer" class="btn btn-primary"><br>
        <a href="?op=list">Retour</a><br>
    </form>

<?php

$content = ob_get_clean();
$titre = "Formulaire";
require ('template.view.php');