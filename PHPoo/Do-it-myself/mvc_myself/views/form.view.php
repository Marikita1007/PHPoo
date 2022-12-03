<?php
ob_start();
?>

    <form action="" method="post">

        <label for="nom">名前</label><br>
        <input type="text" id="nom" name="nom" value="<?= $current->nom ?? '' ?>"><br>

        <label for="prenom">苗字</label><br>
        <input type="text" id="prenom" name="prenom" value="<?= $current->prenom ?? '' ?>" ><br>

        <label for="salaire">給料</label><br>
        <input type="number" min=0 id="salaire" name="salaire" value="<?= $current->salaire ?? '' ?>" ><br>

        <input type="submit" value="登録" class="btn btn-primary">
        <a href="?op=list" >戻る</a>
    </form>

<?php
$content = ob_get_clean();
$title = "入力フォーム";
require('html_template.view.php');