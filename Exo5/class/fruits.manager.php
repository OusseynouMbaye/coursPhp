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
      public static function getNbFruitsInDB(){
        $pdo = monPDO::getPDO();
        $requete = "select count(*) as nbFruit from fruit";
        $statement = $pdo->prepare($requete);
        $statement->execute();
       $resultat =  $statement->fetch();
     return $resultat['nbFruit'];
    }

    public static function insertInToDB($nom,$poids,$prix,$idPanier){
        $pdo = monPDO::getPDO();
        $requete = "insert into fruit  values (:nom,:poids,:prix,:idPanier)";
        $statement = $pdo->prepare($requete);
        $statement->bindValue(":nom",$nom, PDO::PARAM_STR);
        $statement->bindValue(":poids",$poids, PDO::PARAM_INT);
        $statement->bindValue(":prix",$prix, PDO::PARAM_INT);
        $statement->bindValue(":idPanier",$idPanier, PDO::PARAM_STR);
        try {
            return $statement->execute();
        } catch (PDOException $e) {
            echo "ERROR" .$e->getMessage();
            return false;
        }
    }

}