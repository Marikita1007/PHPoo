<?php

class Jeuvideo{

    public $nom_du_jeu;
    public $console;
    public $prix;

    //Le constructeur (méthode magique) va s'executer au moment ou la classe va être instanciée et l'objet crée. Les
    // méthode magiques sont appelées automatiquement
    //コンストラクタ（マジックメソッド）は、クラスがインスタンス化され、オブジェクトが生成される瞬間に実行されます。
    //マジックメソッドが自動的に呼び出される
    public function __construct($n, $c, $p){//Le constructeur peut prendre des arguments
        //コンストラクタは引数を取ることができる

        $this->nom_du_jeu = $n;//$this est une "pseudo-variable" qui désigne l'objet en cours. son utlisation doit se
        // faire pour acceder à un attribut ou une méthode depuis l'intérieur de la classe uniquement.
        //$thisは、現在のオブジェクトを指定する「疑似変数」です。 クラス内部から属性やメソッドにアクセスする場合にのみ使用します。
        $this->console = $c;
        $this->prix = $p;
    }
}

$jeuvideo1 = new Jeuvideo('Detroit', 'PS4', 39);

$jeuvideo2 = new Jeuvideo('Mount & blade II', 'PC', 49);

var_dump($jeuvideo1);
echo'<hr>';
var_dump($jeuvideo2);
