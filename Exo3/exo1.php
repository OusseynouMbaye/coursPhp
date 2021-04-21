<?php
include("./common/menu.php");
include("./common/header.php");
include("./common/footer.php");
?>
<!-- Content Html -->
<h1>Affichage des tables de multilplication </h1>
<form action="" method="GET">
    <label for="table">Table de multilplication à afficher : </label>
    <input type="number" name="table" id="table">
    <br />
    <input type="submit" value="Calculer">
    <br />
</form>
<?php
if (isset( $_GET["table"])) {
   
    echo "<h2>La table de " . $_GET["table"] . "</h2>";
    $resultats = 0;
    //$chiffre= 4;
    for ($i = 0; $i <= 10; $i++) {
        $resultats = $_GET["table"] * $i;
        echo $i . " * " . $_GET["table"] . " = " . $resultats . "<br/>";
    }
} else {
    echo "<h2> Saisir une valeur ci-dessous </h2>";
}

//}
?>
<?php

include("./common/footer.php");
?>