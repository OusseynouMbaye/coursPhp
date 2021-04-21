<?php
include("./common/menu.php");
include("./common/header.php");
include("./common/footer.php");
?>
<!-- Content Html -->
<h1>Selection du personnage </h1>
<form action="" method="POST">
    <label for="perso">Personnage :</label>

    <select name="perso" id="perso">
        <option value="Sofia">Sofia</option>
        <option value="Amina">Amina</option>

    </select>
    <br/>
    
    <input type="submit" value="Valider">
    <!-- <img src="sources/images/sofia.JPG" alt="homme" width="500" height="600">
    <img src="sources/images/sofia.JPG" alt="homme" width="500" height="600"> -->
</form>

<?php
if (isset($_POST["perso"])) {
    if (($_POST["perso"]) ==="Sofia") {
       
        echo "<img src=\"sources/images/sofia.JPG\" alt=\"homme\" width=\"200\" height=\"300\">";
    }else if (($_POST["perso"]) ==="Amina") {
      
        echo "<img src=\"sources/images/amina.JPG\" alt=\"homme\" width=\"200\" height=\"300\">";
    }
   
} else {
    echo "<h2> Saisir une valeur ci-dessous </h2>";
}


?>
<?php

include("./common/footer.php");
?>