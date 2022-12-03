<?php
//$thisは、現在のオブジェクトを指定する「疑似変数」。クラス内部から属性やメソッドにアクセスする場合にのみ使用。
//コンストラクタ（マジックメソッド）は、クラスがインスタンス化され、オブジェクトが生成される瞬間に実行。

//public : クラス内外からアクセスできるプロパティ（クラスの変数みたいなの）
//private : 同じクラス内でしかアクセスできないプロパティ
//protected : 同じクラスもしくはそのクラスを拡張した（extends）クラスでアクセス可能
//
//YOUTUBE : https://www.youtube.com/watch?v=ToomaGjgqBw&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh&index=6
class Person {
    //Properties
    private $name;
    private $age;
    private $hairColor;

    public function __construct($name, $age, $hairColor){
        //この中の操作はクラスを作ったときの最初に処理される。
        //この$nameは__construct($name)のパラメータの$nameを指している。
        $this->name=$name;
        $this->age=$age;
        $this->hairColor=$hairColor;
    }
    //Methods
    //このメソッドはパブリック設定なのでたとえクラスのプロパティがプライベートだったとしても
    //このメソッドを使ってプロパティにアクセスできる
    public function setName($name){
        //$this(擬似変数)を使って属性（プロパティ）$nameにアクセスします。
        $this->name=$name;
    }

    //このfunctionを作ったから下のコメントの部分は
    //エラーになる。getName()メソッドを通すことで名前を表示することができる。
    public function getName(){
        return $this->name;
    }
}

$person = new Person("Bebechan","33","Noir");
//echo $person->name;//Bebechan
//echo $person->age;//33
//$person->setName("Lamochan");
//getName()を通さないとprivate $name;には辿り着けない。
echo $person->getName();

echo "<hr>";
//URL: https://qiita.com/mpyw/items/41230bec5c02142ae691
class Robot { //クラス作成
    private $name = '';//クラス内でプロパティ（変数のようなの）を初期化
    public function setName($name) {//メソッドsetterでプロパティにアーギュメント（引数、つまり変数）を与えることができる。
        $this->name = (string)filter_var($name);
    }
    public function getName() {//メソッドgetterで変数を使う（echoとか）できる！
        return $this->name;
    }
}
$a = new Robot;//ここでオブジェクト作成！
$a->setName('ロボ太郎');//setterメソッドを通してプロパティにアクセスして、値を代入。
$b = new Robot;
$b->setName('ロボ次郎');

echo $a->getName(); // ロボ太郎
echo $b->getName(); // ロボ次郎



class Bebechild {

    private $name = "";
    private $gender = "";
    private $hairColor = "";

    public function __construct($name, $gender, $hairColor)
    {
        $this->setName($name);
        $this->setGender($gender);
        $this->setHairColor($hairColor);

    }

    public function setName($name){
        $this->name = $name;
    }

    private function setGender($gender){
        $this->gender = $gender;
    }

    private function setHairColor($hairColor){
        $this->hairColor = $hairColor;
    }

    public  function getName(){
        return $this->name;
    }

    public function getGender(){
        return $this->gender;
    }

    public function getHairColor(){
        return $this->hairColor;
    }
}

$bebe = new Bebechild("Bebechan", "F", "Noir" );
$bebe->getName();
$bebe->getGender();
$bebe->getHairColor();

$bebe->setName("Lamochan");

echo "<hr>";
//--------------------------------
echo "Singleton <br>";
class Singleton
{

    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self; // creation de l'objet (= new Singleton() fait référence au nom de la classe
            // dans laquelle on se trouve
            // オブジェクトの生成 (= new Singleton()) は、参加しているクラスの名前を参照します。
        }
        return self::$instance;
    }
}

$obj1 = Singleton::getInstance();
var_dump($obj1);
echo '<hr>';
$obj2 = Singleton::getInstance();
var_dump($obj2);
echo "<hr>";

//----------------------
echo "07-surcharge Prix.php<br>";


class PrixHT{
    public function calcul(){
        return 15;
    }
}

class PrixTTC extends PrixHT{
    public function calcul(){
        //このparent::calcul()は上の15を返す
        return parent::calcul() * 1.2;
    }
}

$prix1 = new PrixTTC(); //インスタンス化。つまりこれで新しいオブジェクトを作成。
echo '$prix1 = new PrixTTC();で計算した結果。つまり変数（オブジェクトあり）: ' . $prix1->calcul();//作ったオブジェクトを使ってクラスないのメソッドを使用。
echo "<br>";
echo "(new PrixTTC)->calcul();で計算した結果。つまり変数（オブジェクトなし）: ". (new PrixTTC)->calcul();//この書き方で変数（オブジェクト）作成せずに計算できる。
echo "<hr>";

echo "08-abstraction 象徴化 Pocker.php";
abstract class Player{
    public function isConnected(){
        return $this->beMyPlayer();
    }

    // 抽象的(abstract)なメソッドは中身がない！returnとかなし！
    abstract public function beMyPlayer();
    abstract public function devise();
}

echo "<hr>";

echo 'PHP version: ' . phpversion();

echo "<hr>";

echo 'No1. Create a class and an instance <br>';
class Basket{
    public  $nbProducts;

    public function addProduct(){
        return "A product is added";
    }

    public function deleteProduct(){
        return "A product is deleted";
    }
}
$newProduct = new Basket();
echo $newProduct->addProduct();
echo '<hr>';
echo 'No2. getter ,setter , constructor and this <br>';
class VideoGame{

    public $gameName;
    public $gamePrice;
    public $gameGenre;

    public function __construct($n=null, $p=null, $g=null){

        $this->gameName = $n;
        $this->gamePrice = $p;
        $this->gameGenre = $g;
    }

}

$name = new VideoGame('Harry Potter');
var_dump($name);

class HarryPotter{

    private $name;
    private $house;

    public function __construct($n=null, $h=null){
        $this->setName($n);
        $this->setHouse($h);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($n)
    {
        if(is_string($n)){
            $this->name = $n;
        }
    }

    public function getHouse()
    {
        return $this->house;
    }

    public function setHouse($h)
    {
        if(is_string($h)){
            $this->house = $h;
        }
    }


}
echo '<br>';
$harry = new HarryPotter();
$harry->setName('Harry Potter');
$harry->getHouse('Griffindol');
echo $harry->getName();
echo $harry->getHouse();


echo "<hr> Magic Methods !";

class Wizard
{
    public $house;
    public $item;
    public $patronus;

    public function __construct($myvariable){
        echo "I'm a Harry Potter and my house is $myvariable <br>";
    }

    public function __set($name, $value){
        echo "You tried to add $value in $name, but this property doesn't exist !<br>";
    }

    public function  __get($name){
        echo "You tried to show the $name property, but it doesn't exist ! <br>";
    }

    public function __call($name, $args){
        echo "You tried to launch $name ,but it doesn't exist, the paramator was " . implode(',', $args) . "<br>";
    }

    public function __clone(){
        echo "I'm __clone() method and I didn't use echo ,but I appear anyway! ";
    }

}

$hp = new Wizard('Hogwarts');
$hp->house = 'Grifindol';
$hp->patronus = 'Dear';
echo $hp->house . '<br>';
echo $hp->patronus . '<br>';
echo $hp->brrrrrrrr('test', 100, 'test2'); //__call
echo $hp->item = 'glasses' . '<br>';

$potter = clone $hp; // __clone

echo "<hr>";


class Test{

    protected $test;

    public function __construct($test=null){
        $this->test=$test;
    }

    public function getTest()
    {
        return $this->test;
    }

    public function setTest($test)
    {
        $this->test = $test;
    }

    protected function Hello(){
        return "Hi I'm the parent function <br>";
    }
}

$test1 = new Test();
$test1->setTest("Hello I'm a test1 <br>");
echo $test1->getTest();

class Test2 extends Test{

    public function Hello()
    {
        return "Hi I'm a second heritage function !";
    }

}

$test2 = new Test2();
echo $test2->Hello();


class Test3 extends Test2{

    public function Hello()
    {
        return parent::Hello(); // TODO: Change the autogenerated stub
    }
}

$test3 = new Test3();
echo $test3->Hello();
$test3->setTest("I tried to use first parent");
echo $test3->getTest();


















