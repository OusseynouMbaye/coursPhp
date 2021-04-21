<?php
include("./common/menu.php");
include("./common/header.php");
include("./common/footer.php");
?>
<!-- Content Html -->
<h1>Affichage hauteur de la pyramide </h1>
<form action="" method="POST">
    <label for="hauteur">Hauteur de la pyramide : </label>
    <input type="number" name="hauteur" id="hauteur">
    <br />
    <input type="submit" value="Envoyer">
    <br />
</form>
<?php
if (isset($_POST["hauteur"]) && $_POST["hauteur"] > 0) {
    $hauteur = $_POST["hauteur"];
    echo "<h2> Pyramide de hauteur : " . $hauteur . "</h2>";
    $txt = "";
    /*Va generer la pyramide des ascendantes */
    for ($i = 0; $i < $hauteur; $i++) {
        $txt .= "xx";
        echo $txt . "<br/>";
    }
    /*Va generer la pyramide des descendantes */
    for ($i = 0; $i < $hauteur - 1; $i++) {
        $txt = substr($txt, 0, strlen($txt) - 2);
        echo $txt . "<br/>";
    }
} else {
    echo "<h2> Saisir une valeur ci-dessous </h2>";
}


?>
<?php

include("./common/footer.php");
?>