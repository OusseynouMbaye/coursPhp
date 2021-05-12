<?php
require_once("class/fruits.class.php");
require_once("class/panier.class.php");
require_once("class/monPDO.class.php");
require_once("class/fruits.manager.php");
require_once("class/paniers.manager.php");

// use \App\Autoloader;

// require_once '../class/Autoloader.php';
// Autoloader::register();

include("./common/menu.php");
include("./common/header.php");


?>
<div class="container">
<!-- <?php
        echo Utile::manageTitleLevel2('Panier :') 
    ?> -->

<?php
    if(isset($_POST['idFruit']) && $_POST['type'] === "modification"){
        $idFruitToUpdate = $_POST['idFruit'];
        $poidsFruitToUpdate = (int)$_POST['poidsFruit'];
        $prixFruitToUpdate = (int)$_POST['prixFruit'];
        $res = FruitManager::updateFruitInDB($idFruitToUpdate,$poidsFruitToUpdate,$prixFruitToUpdate );
        if($res){
            echo '<div class="alert alert-success mt-2" role="alert">La modificiation a été effectué en BD </div>';
        }else{
            echo '<div class="alert alert-danger mt-2" role="alert">La modificiation n\'a pas été effectué en BD </div>';
        }
    }elseif (isset($_POST['idFruit']) && $_POST['type'] === "suppression") {
        $idFruitToUpdate = $_POST['idFruit'];
        $res = FruitManager::deleteFruitPanier($idFruitToUpdate);
        if($res){
            echo '<div class="alert alert-success mt-2" role="alert">La suppression a été effectué en BD </div>';
        }else{
            echo '<div class="alert alert-danger mt-2" role="alert">La suppression n\'a pas été effectué en BD </div>';
        }
    }
    PanierManager::setPaniersFromDB();

    foreach(Panier::$paniers as $panier){
        $panier->setFruitToPanierFromDB();
         echo $panier;
    }
    

?>
</div>

<?php

include("./common/footer.php");
?>