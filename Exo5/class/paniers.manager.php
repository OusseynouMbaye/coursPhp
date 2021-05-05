<?php
require_once("class/panier.class.php");
require_once("class/monPDO.class.php");

?>
<?php

class PanierManager
{
    public static function setPaniersFromDB()
    {
        $pdo = monPDO::getPDO();
        $requete = "Select identifiant , NomClient from panier";
        $statement = $pdo->prepare($requete);
        $statement->execute();
        $paniers = $statement->fetchAll();
        foreach ($paniers as $panier) {
            Panier::$paniers[] =  new Panier($panier['identifiant'], $panier['NomClient']);
        }
    }

    public static function getFruitPanier($identifiant)
    {
        $pdo = monPDO::getPDO();
        $requete = "Select f.nom as fruit , f.poids as poids, f.prix as prix from panier p inner join fruit f on f.identifiant  = p.identifiant where p.identifiant =:id";
        $statement = $pdo->prepare($requete);
        $statement->bindValue(":id", $identifiant, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll();
    }
    public static function getNbPanierInDB(){
        $pdo = monPDO::getPDO();
        $requete = "select count(*) as nbPanier from panier";
        $statement = $pdo->prepare($requete);
        $statement->execute();
       $resultat =  $statement->fetch();
     return $resultat['nbPanier'];
    }
    public static function insertInToDB($id,$nom){
        $pdo = monPDO::getPDO();
        $requete = "insert into panier (identifiant, NomClient) values (:id,:nom)";
        $statement = $pdo->prepare($requete);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->bindValue(":nom",$nom, PDO::PARAM_STR);
        try {
            return $statement->execute();
        } catch (PDOException $e) {
            echo "ERROR" .$e->getMessage();
            return false;
        }
       
    }
}