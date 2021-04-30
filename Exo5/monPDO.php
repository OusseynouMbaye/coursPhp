<?php
    //connexion à la base de donnée
const HOST_NAME = "localhost";
const DB_NAME = "db_panierfruit";
const USER_NAME = "root";
const PASSWORD = "";

try {
    $connexion = 'mysql:host='.HOST_NAME.';dbname='.DB_NAME;
    $monPDO = new PDO($connexion,USER_NAME,PASSWORD,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
  $message ="error connextion to DB".$e->getMessage();
  die( $message);
}

if ($monPDO) {
    //methode pour afficher des requete avec des closes where
    $limitation = 130;
   $requete = "select * from fruit where poids > :value ";
   $statement = $monPDO->prepare($requete);
   $statement->bindValue(":value",$limitation, PDO::PARAM_INT);
   $statement->execute(); 
   $result = $statement->fetchAll();
   echo "<pre>";
   print_r($result);
}

/*
//requete avec toutes les fruits 
if ($monPDO) {
    //requete pour avoir tous les panier de fruit de db_panierfruit
   $requete = "select * from fruit";
   $statement = $monPDO->prepare($requete);
   $statement->execute(); 
   $result = $statement->fetchAll();
   echo "<pre>";
   print_r($result);
}

*/