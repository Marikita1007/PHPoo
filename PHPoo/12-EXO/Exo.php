<!--Créer les classes suivante : Dacia, Renault et Vehicule-->
<!--La classe Vehicule possede les methodes demarrer(), carburant(), nbTestsObligatoires()-->
<!--1. Faire en sorte que je ne puisse pas instancier Vehicule // cf chap 08-->
<!--2. Obligation pour la Renault et la Dacia d'avoir la même méthode démarrer sans modification possible // cf chap 09-->
<!--3. Obligation pour la Renault et la Dacia de déclarer la méthode carburant ( Renault Essence, Dacia GPL) // cf chap 08-->
<!--4. La Renault devra effectuer 30 tests de plus qu'un véhicule de base (chap 07)-->
<!--5. La Dacia devra effectuer 70 tests de plus qu'un véhicule de base (chap 07)-->
<!--6. Faire les controles et affichages-->
<!---->
<!--次のクラスを作成します：Dacia、Renault、Vehicle-->
<!--Vehicleクラスには、start（）、fuel（）、nbTestsObligatoires（）メソッドがあります。-->
<!--1.車両をインスタンス化できないことを確認します//第08章を参照してください = abstract-->
<!--2.ルノーとダチアが変更の可能性なしに同じ開始方法を持つ義務//第09章を参照 = final-->
<!--3.ルノーとダチアが燃料法を宣言する義務（ルノーガソリン、ダチアGPL）//第08章を参照-->
<!--4.ルノーは、基本的な車両よりも30回多くのテストを実行する必要があります（第07章）-->
<!--5.ダチアは、基本的な車両よりも70回多くのテストを実行する必要があります（第07章）-->
<!--6.コントロールとディスプレイを作成します-->

<!--Salmaのフォルダ名　mise en application-->

<?php

abstract class Vehicle //1:abstractで車両をインスタンス化できないことを確認
{
    final public function demarrer(){//finalを使うことで継承する時に変更できない用にする。これはずっとこのまま。継承（extend）した時には何も書かなくて良い
        return "je démarre";
    }

    abstract public function carburant();
    public function nbTestsObligatoires(){
        return 100;
    }
}
//abstractをしているからVehicleはインスタンス化できない。
//その継承（extend）を通してインスタンス化できる！

class Dacia extends Vehicle {

    public function carburant(){//3.ルノーとダチアが燃料法を宣言する義務（ルノーガソリン、ダチアGPL）//第08章を参照
        return "gpl(Diesel)";
    }

    public function nbTestsObligatoires()
    {
        return 'Nous testons Dacia ' . (parent::nbTestsObligatoires() + 70) ;//5.ダチアは、基本的な車両よりも70回多くのテストを実行する必要があります（第07章）
    }
}

class Renault extends Vehicle {


    public function carburant(){//3.ルノーとダチアが燃料法を宣言する義務（ルノーガソリン、ダチアGPL）//第08章を参照
        return "essence";
    }
    public function nbTestsObligatoires()
    {
        return 'Nous testons Renault ' . (parent::nbTestsObligatoires() + 30);//4.ルノーは、基本的な車両よりも30回多くのテストを実行する必要があります（第07章）
    }
}
$dacia = new Dacia();
$renault = new Renault();

var_dump(get_class_methods($dacia));
echo "<hr>";

echo "Démarrer pour Dacia : " . $dacia->demarrer().'<br>';
echo "Démarrer pour Renault : " . $dacia->demarrer().'<br>';
echo 'Carburant pour Dacia : ' . $dacia->carburant().'<br>';
echo 'Carburant pour Renault : ' . $renault->carburant().'<br>';
echo 'Nombre de test pour Dacia : ' . $dacia->nbTestsObligatoires().'<br>';
echo 'Nombre de test pour Renault : ' . $renault->nbTestsObligatoires().'<br>';
