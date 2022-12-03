<!--参照サイト：https://www.sejuku.net/blog/23555-->

<?php

//phpファイルを読み込む
require_once ('lib1.php');

//名前空間をインポート
//以下にuseキーワードを使用して名前空間の一部を取得し、それぞれの名前空間の関数を呼び出す方法を記述します。
use NAMESPACE_AU_NOM_VRAIMENT_TRES_LONG as A;// création d'un Alias avec le mot clef "as"
// キーワード「as」でエイリアスを作成

$a = new A\ClassA;
$a->maMethode();

echo '<hr>';
/**
 * as permet de créer un raccourci d'appel pour le namespace cela n'empêche pas l'utilisation du nom original complet
 * 名前空間へのショートカットを作成することができますが、オリジナルの完全な名前の使用を妨げるものではありません。
 */