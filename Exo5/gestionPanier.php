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
    echo '<form action="" method="post">';
        echo '<fieldset>';
            echo ' <legend>Panier à creer</legend>';
            echo ' <label for="nb_pommes">Nombre de pommes</label>';
            echo ' <input type="number" name="nb_pommes" id="nb_pommes" required/>';
            echo ' <label for="nb_cerises">Nombre de cerises</label>';
            echo ' <input type="number" name="nb_cerises" id="nb_cerises" required/>';
            echo ' <input type="submit" value="creer le panier">';
        echo '</fieldset>';
    echo ' </form>';

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
    if (isset($_POST['nb_pommes'])) {
       $p = new Panier();
       $nbPommes = (int)$_POST['nb_pommes'];
       $nbCerises = (int)$_POST['nb_cerises'];
       for ($i=0; $i <$nbPommes ; $i++) { 
        $p->addFruit(new Fruit(Fruit::APPLE, rand(100,150)));
       }
       for ($i=0; $i <$nbPommes ; $i++) { 
        $p->addFruit(new Fruit(Fruit::CHERRY, rand(10,25)));
       }
       $paniers [] = $p;
      
    }

 echo '<form action="#" method="POST">';
    echo '<fieldset>';
    echo ' <legend>Afficher un Panier</legend>';
        echo '<label for="panier">Liste de panier </label>';
        echo '<select name="panier" id="panier" onChange="submit()">';
        echo "<option value=''></option>";
        foreach($paniers as $panier){
            echo "<option value='".$panier->getIdentifiant()."'> Panier".$panier->getIdentifiant()."</option>";
        }
    echo '</select>';
    echo '</fieldset>';
echo '</form>';

    if (isset($_POST['panier'])) {
        $panierAAfficher = getPanierById((int)$_POST['panier']);
        echo "<h2>Affichage du panier ".$_POST['panier']."</h2>";
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