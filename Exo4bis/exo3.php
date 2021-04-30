<?php
include("./class/fruit.class.php");
include("./class/panier.class.php");
include("./common/menu.php");
include("./common/header.php");

?>
<!-- Content Html -->
<h1>Fruit </h1>

<?php

$pomme1 = new Fruit(Fruit::POMME, 100);
$cerise1 = new Fruit(Fruit::CERISE, 10);
$pomme2 = new Fruit(Fruit::POMME, 150);
$cerise2 = new Fruit(Fruit::CERISE, 20);

$panier1 =  new Panier();
$panier2 =  new Panier();
$panier1->ajouterFruit($pomme1);
$panier1->ajouterFruit($cerise2);
$panier2->ajouterFruit($pomme2);
$panier2->ajouterFruit($cerise2);

echo($panier1);

echo($panier2);


?>
<?php

include("./common/footer.php");
?>