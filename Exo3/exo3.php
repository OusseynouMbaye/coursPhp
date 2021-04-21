<?php
include("./common/menu.php");
include("./common/header.php");
include("./common/footer.php");
?>
<!-- Content Html -->
<h1>Cercle - Périmetre et Aire </h1>
<form action="" method="POST">
    <label for="rayon"> Rayon d'un cercle : </label>
    <input type="number" name="rayon" id="rayon">
    <br />
    <label for="perimetre">Périmetre : </label>
    <input type="checkbox" name="perimetre" id="perimetre">
    <br />
    <label for="aire">Aire : </label>
    <input type="checkbox" name="aire" id="aire">
    <br />
   <input type="button" value="Ajouter">
    <br />
</form>
<?php
if (isset($_POST["rayon"]) && isset($_POST["rayon"]) > 0) {
    
} else {
    echo "<h2> Saisir une valeur ci-dessous </h2>";
}

?>
<?php

include("./common/footer.php");
?>