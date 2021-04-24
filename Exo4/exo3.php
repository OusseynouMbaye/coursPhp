<?php
require_once("classes/fruits.class.php");
require_once("classes/panier.class.php");
include("./common/menu.php");
include("./common/header.php");


?>
<!-- Content Html -->
<h1>Fruits </h1>

<!-- Content Php -->
<?php

$apple1 = new Fruit(Fruit::APPLE, 150); //Fruit:: pour chercher une constante de classe
$apple2 = new Fruit(Fruit::APPLE, 100);
$apple3 = new Fruit(Fruit::APPLE, 250);
$cherry1 = new Fruit(Fruit::CHERRY, 50);
$cherry2 = new Fruit(Fruit::CHERRY, 75);
$cherry3 = new Fruit(Fruit::CHERRY, 25);

//creation panier
$panier1 = new Panier();
$panier2 = new Panier();

$panier1->addFruit($apple1);
$panier1->addFruit($apple2);
$panier1->addFruit($cherry1);
$panier2->addFruit($apple3);
$panier2->addFruit($cherry2);
$panier2->addFruit($cherry3);
    
    echo($panier1);

    echo($panier2);

// $fruits =[$apple1,$apple2,$apple3,$cherry1,$cherry2,$cherry3];
// // print_r($apple1);
// foreach ($fruits as $fruit) {
//     echo $fruit;
//     echo "<br/>-----------------<br/>";
// }

?>

<?php

include("./common/footer.php");
?>