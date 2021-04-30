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
    
 $paniers = [$panier1,$panier2];

 echo '<form action="#" method="POST">';
    echo '<label for="panier">Liste de panier </label>';
    echo '<select name="panier" id="panier" onChange="submit()">';
    echo "<option value=''></option>";
    foreach($paniers as $panier){
        echo "<option value='".$panier->getIdentifiant()."'> Panier".$panier->getIdentifiant()."</option>";
    }
    echo '</select>';
echo '</form>';

if (isset($_POST['panier'])) {
    $panierAAfficher = getPanierById((int)$_POST['panier']);
    echo "<h2>Affichage du panier".$_POST['panier']."</h2>";
    echo $panierAAfficher;
 }

  function getPanierById($id)
 {
     global $paniers;
     foreach($paniers  as $panier){
        if ($panier->getIdentifiant()===$id) {
            return $panier;
        }
     }
 }

?>

<?php

include("./common/footer.php");
?>