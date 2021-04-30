<?php
require_once("classes/fruits.class.php");
require_once("classes/panier.class.php");
require_once("classes/monPDO.class.php");
include("./common/menu.php");
include("./common/header.php");


?>
<h2>Fruit</h2>

<?php
$pdo = monPDO::getPDO();
if ($pdo) {
    $requete = "select f.nom as Nom, f.poids as Poids, f.prix as Prix , p.NomClient as Client 
                    from fruit f inner join panier p on f.identifiant = p.identifiant";
    $statement = $pdo->prepare($requete);
    $statement->execute();
    $fruits = $statement->fetchAll();
    foreach ($fruits as $fruit) {
        if (preg_match("/cerise/",$fruit['Nom'])) {
            echo "<img src = 'sources/images/cherry.png' alt='imgage cerise' /> <br/>";
        }
        if (preg_match("/pomme/",$fruit['Nom'])) {
            echo "<img src = 'sources/images/apple.png' alt='imgage pomme' /> <br/>";
        }
        echo "Nom : ". $fruit["Nom"] ."<br/>";
        echo "Poids : ". $fruit["Poids"] ."<br/>";
        echo "Prix : ". $fruit["Prix"] ."<br/>";
        echo "Panier de : ". $fruit["Client"] ."<br/>";
        echo "<br/>****************<br/>";
    }
}
?>


<?php

include("./common/footer.php");
?>