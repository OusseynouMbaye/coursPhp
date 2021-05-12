<?php
require_once("class/formatageUtile.php");
require_once("class/fruits.class.php");
require_once("class/panier.class.php");
require_once("class/monPDO.class.php");
require_once("class/fruits.manager.php");


include("./common/menu.php");
include("./common/header.php");


?>
<div class="container">
    <?php
        echo Utile::manageTitleLevel2('Fruit :') 
    ?>

<?php
    FruitManager::setFruitsFromDB();
    echo '<div class="row mx-auto">';
    foreach(Fruit::$fruits as $fruit){
        echo '<div class="col-sm p-2">';
            echo $fruit->showListFruit();
        echo '</div>'; 
    }
    echo '</div>';

?>
</div>

<?php

include("./common/footer.php");
?>