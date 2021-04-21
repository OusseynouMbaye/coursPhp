<?php
include("./common/menu.php");
include("./common/header.php");
include("./common/footer.php");


?>
<!-- Content Html -->
<h1>Calculer moyenne : </h1>
<!--  formulaire qui permet d'afficher les input des note en GET -->
<form action="#" method="GET">

    <label for="nbreNote"> Nombre de notes : </label>
    <input type="number" min="0" name="nbreNote" id="nbreNote">
    <input type="submit" value="Ajouter">
    <br />

</form>
<?php

if (isset($_GET["nbreNote"]) && isset($_GET["nbreNote"]) > 0) {
    $nbNote = $_GET["nbreNote"];
    //deuxieme formulaire qui permet de faire le calcul en POST
    echo "<form action=\"#\" method=\"POST\">";
    echo "<fieldset>
    <legend>Inscrire les notes pour calculer les moyennes </legend>";
    for ($i = 1; $i <= $nbNote; $i++) {
        echo "   
    <label for=\"note" . $i . "\">note " . $i . " :</label>
    <input type=\"number\" min=\"0\" name=\"note" . $i . "\" id=\"note" . $i . "\" required>
    <br />
     ";
    }
    echo "<input type=\"submit\" class=\"btn btn-outline-secondary\" value=\"Calculer\">";
    echo  "</fieldset>";
    echo "</form>";
    //
    if (isset($_POST["note1"])) {
        $resultats = 0;
        for ($i = 1; $i < $nbNote; $i++) {
            $resultats += $_POST["note" . $i];
        }
        echo "La moyenne est de " . ($resultats / $nbNote);
    }
} else {
    echo "<h2> Saisir une valeur ci-dessous </h2>";
}

?>
<?php

include("./common/footer.php");
?>