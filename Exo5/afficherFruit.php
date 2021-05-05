<?php
require_once("class/fruits.class.php");
require_once("class/panier.class.php");
require_once("class/monPDO.class.php");
require_once("class/fruits.manager.php");


include("./common/menu.php");
include("./common/header.php");


?>
<h2>Fruit</h2>

<?php
    FruitManager::setFruitsFromDB();

    foreach(Fruit::$fruits as $fruit){
        echo $fruit;
    }
    

?>


<?php

include("./common/footer.php");
?>