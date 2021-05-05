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
<h2>Fruit</h2>

<?php
    PanierManager::setPaniersFromDB();

    foreach(Panier::$paniers as $panier){
        $panier->setFruitToPanierFromDB();
         echo $panier;
    }
    

?>


<?php

include("./common/footer.php");
?>