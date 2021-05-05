<?php
require_once("class/fruits.class.php");
require_once("class/monPDO.class.php");

?>
<?php

class FruitManager
{
    public static function setFruitsFromDB()
    {
        $pdo = monPDO::getPDO();
        if ($pdo) {
            $requete = "select f.nom as Nom, f.poids as Poids, f.prix as Prix , p.NomClient as Client 
                            from fruit f inner join panier p on f.identifiant = p.identifiant";
            $statement = $pdo->prepare($requete);
            $statement->execute();
            $fruits = $statement->fetchAll();

            foreach ($fruits as $fruit) {
                Fruit::$fruits[] =  new Fruit($fruit['Nom'], $fruit['Poids'], $fruit['Prix']);
            }
        }
    }
}