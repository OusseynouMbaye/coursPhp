<?php
include("./common/menu.php");
include("./common/header.php");
include("./common/footer.php");

// $p1 = ["Sofia", 5, false, 3, 6];

// $p2 = ["Mina", 2, false, 2, 4];
// $p3 = ["Watson", 1, true, 8, 3];
$p1 = [
    "Nom" => "Sofia",
    "Age" => 5,
    "Sexe" => false,
    "force" => 3,
    "Agilité" => 6,
];
$p2 = [
    "Nom" => "Amina",
    "Age" => 2,
    "Sexe" => false,
    "Force" => 8,
    "Agilité" => 9,
];
$p3 = [
    "Nom" => "Sofia",
    "Age" => 1,
    "Sexe" => true,
    "Force" => 9,
    "Agilité" => 6,
];
?>
<!-- Content Html -->
<h1>Selection du personnage </h1>
<form action="" method="POST">
    <label for="perso">Personnage :</label>
    <!-- onchange="submit()" permet de changer le perso sans avoir besoin de cliquer sur un bouton
    submit() s'applique aussi en javaScript -->
    <select name="perso" id="perso" onchange="submit()">
        <!-- le "selected" permet de faire que le nom de la list et la photo qui s'affiche correspondent -->
        <option value="p1" <?php if (isset($_POST["perso"]) && $_POST["perso"] === "p1") echo "selected" ?>>Sofia</option>
        <option value="p2" <?php if (isset($_POST["perso"]) && $_POST["perso"] === "p2") echo "selected" ?>>Amina</option>
        <option value="p3" <?php if (isset($_POST["perso"]) && $_POST["perso"] === "p3") echo "selected" ?>>Watson</option>
    </select>
    <br />
    <div></div>
</form>

<?php


if (!isset($_POST["perso"]) || ($_POST["perso"]) === "p1") {
    echo "<div class='gauche'> ";
        echo "<img src=\"sources/images/sofia.JPG\" alt=\"homme\" width=\"200\" height=\"250\">";
    echo "</div>";
    echo "<div class='gauche'> ";
        showPerso($p1);
    echo "</div>";
} else if (($_POST["perso"]) === "p2") {
    echo "<div class='gauche'>";
         echo "<img src=\"sources/images/amina.JPG\" alt=\"homme\" width=\"200\" height=\"250\">";
    echo "</div>";
        echo "<div class='gauche'> ";
    showPerso($p2);
    echo "</div>";
} else if (($_POST["perso"]) === "p3") {
    echo "<div class='gauche'>";
        echo "<img src=\"sources/images/watson.JPG\" alt=\"homme\" width=\"200\" height=\"250\">";
    echo "</div>";
    echo "<div class='gauche'> ";
        showPerso($p3);
    echo "</div>";
}

echo "<div class='clearB'></div> ";
function   showPerso($personnage)
{
    foreach ($personnage as $index => $value) {
    echo "<b>". $index . "</b> : ". $value ."<br/>" ;
    }
}

?>
<?php

include("./common/footer.php");
?>