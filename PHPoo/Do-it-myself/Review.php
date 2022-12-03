<?php
//01 クラス　オブジェクト　インスタンス　見える範囲
class Cart{
    public $nbProducts;

    public function addArticle(){
        return "You added an article !";
    }

    public  function deleteArticle(){
        return "The article is deleted !";
    }
}
//$cartの中にnewでインスタンス化したCartクラスが入ってる！
$cart = new Cart;
var_dump($cart); //object(Cart)#1 (1) { ["nbProducts"]=> NULL }
echo "<br>";
echo "I used get_class_methods : ";
var_dump(get_class_methods($cart)); //array(2) { [0]=> string(10) "addArticle" [1]=> string(13) "deleteArticle" }
echo "<br>";
echo $cart->addArticle() . "<br>";
$cart->nbProducts = 5;
echo $cart->nbProducts . ' = $cart->nbProducts';

echo "<hr>";
//02 private
class Name{
    //カプセル化のためプロパティ(attributs ou propriétés)はprivate
    private $namae;
    private $myoji;

    public function __construct($namae=null, $myoji=null)
    {
        $this->setNamae($namae);
        $this->setMyoji($myoji);
    }

    public function setNamae($namae)
    {
        if (is_string($namae)) {
            $this->namae = $namae;
        }
    }

    public function getNamae()
    {
        return $this->namae;
    }

    public function setMyoji($myoji)
    {
        if (is_string($myoji)) {
            $this->myoji = $myoji;
        }
    }

    public function getMyoji()
    {
        return $this->myoji;
    }
}

    $me = new Name();

    $me->setNamae('Marika ');
    echo $me->getNamae();
    $me->setMyoji('Abe');
    echo $me->getMyoji();

echo "<hr>";
//staticはクラスで決められたコンストのようなもの
class StaticClass{
    public static $nbInstances = 0;
    public $nbObjects = 0;

    public function __construct()
    {
        self::$nbInstances++;
        $this->nbObjects++;
    }
}

$ob1 = new StaticClass();
$ob2 = new StaticClass();
$ob3 = new StaticClass();

echo 'Number of static(self::$nbInstances) are ' . StaticClass::$nbInstances . '<br>';
echo 'Number of objects are ' . $ob3->nbObjects . '<br>';


echo "<hr>";
//Singleton

class Singleton {

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }
}

$obj1 = Singleton::getInstance();
var_dump($obj1);

echo "<hr>";
//trait
trait tMember{
    public $nickName;
    public function beConnected(){
        return "I'm connected";
    }
}

class Site{
    use tMember;
}

$site1 = new Site();
var_dump(get_class_methods($site1));
echo "<br>";
echo $site1->beConnected();

echo "<hr>";
//try catch

class Sushi{

}
$sushi = array('ebi','uni','ika');
var_dump(array_search('kohada', $sushi)); //bool(false)

function search($elem, $tab){
    if(!is_array($tab)){
        throw new Exception("You need to send a table");
    }
    return array_search($elem, $tab);
}

try{
    echo search('tamago', $sushi);
}catch (Exception $e){
    echo $e->getMessage().'<br>';
}

echo "<br>";

try{
    echo search('ebi', $sushi);
}catch (Exception $e){
    echo $e->getMessage().'<br>';
}