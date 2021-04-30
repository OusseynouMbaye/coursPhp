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

//etape 1: Creer la liste deroulante en utilisant id
$paniers = [$panier1,$panier2];
    echo '<form action="#" method="POST">';
        echo '<label for="panier">Panier :</label>';
        echo '<select name="panier" id ="panier" onchange="submit()"> ';
        echo "<option value=''> </option> ";
        foreach($paniers as $panier){
            echo "<option value='".$panier->getIdPanier()."'>Panier ".$panier->getIdPanier()." </option> "; 
        }
        echo '</select>';
    echo '</form>';

    //afficher le panier en fonction de la saisie
    if (isset($_POST["panier"])) {
      $panierToShow  = getPanierToshowById((int) $_POST["panier"]);
      echo '<h2> affichage du panier : '.$_POST["panier"].'</h2>';
      echo $panierToShow;
    }

    function getPanierToshowById($id){
        global $paniers;
        foreach ($paniers as $panier) {
           if ($panier->getIdPanier() === $id) {
               return $panier;
           }
        }
    }
?>
<?php

include("./common/footer.php");
?>