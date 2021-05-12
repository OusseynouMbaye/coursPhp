<?php
require_once("class/fruits.class.php");
require_once("class/panier.class.php");

// require_once('class/Autoloader.php');
// Autoloader::register();

include("./common/menu.php");
include("./common/header.php");


?>
<!-- Content Html -->
<div class="container">
<?php echo Utile::manageTitleLevel2('Ajout d\'un panier') ?>

<!-- Content Php -->
<?php
    echo '<form action="" method="post">';
        echo '<fieldset>';
            echo ' <legend>Panier à creer</legend>';
            echo ' <label for="client">Nom du client</label>';
            echo ' <input type="text" name="client" id="client" required/> ';
            echo ' <label for="nb_pommes">Nombre de pommes</label>';
            echo ' <input type="number" name="nb_pommes" id="nb_pommes" required/>';
            echo ' <label for="nb_cerises">Nombre de cerises</label>';
            echo ' <input type="number" name="nb_cerises" id="nb_cerises" required/>';
            echo ' <input type="submit" value="creer le panier">';
        echo '</fieldset>';
    echo ' </form>';

    if (isset($_POST['client']) && !empty($_POST['client'])) {
        $p = new Panier(Panier::generateUniqueId(),$_POST['client']);
        
      $res = $p->saveInDB();
      if ($res) {
              
               $nbPommes = (int)$_POST['nb_pommes'];
               $nbCerises = (int)$_POST['nb_cerises'];
               $cpt = 1;
               $nbFruitInDb = Fruit::generateUniqueId();
               for ($i=0; $i <$nbPommes ; $i++) { 
                $fruit = new Fruit("pomme ".($nbFruitInDb+$cpt), rand(120,150),20);
                $fruit->saveInDB($p->getId());
                $p->addFruit($fruit);
                $cpt++;
               }
               for ($i=0; $i <$nbCerises ; $i++) { 
                $fruit= new Fruit("cerise ".($nbFruitInDb+$cpt), rand(15,25),5);
                $fruit->saveInDB($p->getId());
                $p->addFruit($fruit);
                $cpt++;
               }
          echo $p;
          echo "OK";
      }else{
          echo "L'ajout n'a pas fonctionné";
      }
    }
    //    $p = new Panier();
    //    $nbPommes = (int)$_POST['nb_pommes'];
    //    $nbCerises = (int)$_POST['nb_cerises'];
    //    for ($i=0; $i <$nbPommes ; $i++) { 
    //     $p->addFruit(new Fruit(Fruit::APPLE, rand(100,150)));
    //    }
    //    for ($i=0; $i <$nbPommes ; $i++) { 
    //     $p->addFruit(new Fruit(Fruit::CHERRY, rand(10,25)));
    //    }
    //    $paniers [] = $p;
      
   



?>
</div>
<?php

include("./common/footer.php");
?>