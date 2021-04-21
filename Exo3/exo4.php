<?php
include("./common/menu.php");
include("./common/header.php");
include("./common/footer.php");
session_start();
if (!isset($_SESSION["chiffreAleatoire"])) {
    $_SESSION["chiffreAleatoire"] = rand(1,10);// 8;
}


//$aleatoire =  5; //rand(0, 20);
?>
<!-- Content Html -->
<h1>Trouver le nombre choisi par l'ordinateur</h1>
<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit"  value="Reinitialiser">
    <br />
</form>
<form action="#" method="POST">

    <label for="chiffre"> Quel est le nombre : </label>
    <input type="number" min="0" max="10" name="chiffre" id="chiffre">
    <br />
    <input type="submit" value="Deviner">
    <br />
</form>
<?php
if (isset($_POST["reinit"]) && $_POST["reinit"]==="yes") {
    $_SESSION["chiffreAleatoire"] = rand(1,10);//4;
}
echo $_SESSION["chiffreAleatoire"];
$aleatoire = $_SESSION["chiffreAleatoire"];
if (isset($_POST["chiffre"]) && isset($_POST["chiffre"]) > 0) {
    $chiffreSaisi = (int) $_POST["chiffre"];
    echo "<h2>";
    if ($chiffreSaisi === $aleatoire) {
        echo " bravo vous avez trouver le bon nombre " . $aleatoire;
    } elseif ($chiffreSaisi < $aleatoire) {
        echo "Le chiffre saisi est tro petit " . "<br/>";
    } elseif ($chiffreSaisi > $aleatoire) {
        echo "Le chiffre saisi est tro grand " . "<br/>";
    }
    echo "<h2>";
} else {
    echo "<h2> Saisir une valeur ci-dessous </h2>";
}

?>
<?php

include("./common/footer.php");
?>