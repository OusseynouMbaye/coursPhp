<?php
class monPDO{
        //connexion à la base de donnée
    private const HOST_NAME = "localhost";
    private const DB_NAME = "db_panierfruit";
    private const USER_NAME = "root";
    private const PASSWORD = "";
    
    private static $monPDOinstance = null;

    public static function getPDO(){
        if (is_null(self::$monPDOinstance)) {
            
            try {
                $connexion = 'mysql:host='.self::HOST_NAME.';dbname='.self::DB_NAME;
              self::$monPDOinstance = new PDO($connexion,self::USER_NAME,self::PASSWORD,
              array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
            $message ="error connextion to DB".$e->getMessage();
            die( $message);
            }
            self::$monPDOinstance->exec("SET CHARACTER SET UTF8");
        }
        return self::$monPDOinstance;
    }


}


/*

if ($monPDO) {
//methode pour afficher des requete avec des closes where
$limitation = 130;
$requete = "select * from fruit where poids > :value ";
$statement = $monPDO->prepare($requete);
$statement->bindValue(":value",$limitation, PDO::PARAM_INT);
$statement->execute();
$result = $statement->fetchAll();
echo "
<pre>";
   print_r($result);
}
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