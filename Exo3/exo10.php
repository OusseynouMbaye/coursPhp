<?php
include("./common/menu.php");
include("./common/header.php");


$personnages = [
    $p1 = [
        "Nom" => "Sofia",
        "Img" => "sofia.JPG",
        "Age" => 5,
        "Sexe" => false,
        "force" => 3,
        "Agilité" => 6,
    ],
    $p2 = [
        "Nom" => "Amina",
        "Img" => "amina.JPG",
        "Age" => 2,
        "Sexe" => false,
        "Force" => 8,
        "Agilité" => 9,
    ],
    $p3 = [
        "Nom" => "Watson",
        "Img" => "watson.JPG",
        "Age" => 1,
        "Sexe" => true,
        "Force" => 9,
        "Agilité" => 6,
    ]
]

?>
<!-- Content Html -->
<h1>Selection du personnage </h1>
<!-- Content Php -->
<?php

foreach ($personnages as  $perso) {
    echo "<div class='gauche'> ";
    echo "<img src='sources/images/" . $perso['Img'] . " 'alt='homme' width='200' height='250'/>";
    echo "</div>";
    echo "<div class='gauche'> ";
    showPerso($perso);
    echo "</div>";
    echo "<div class='clearB'></div>";
    echo "<br/>";
}


function   showPerso($personnage)
{
    foreach ($personnage as $index => $value) {
        if ($index !== "Img" && $index !== "Sexe") {
            echo "<b>" . $index . "</b> : " . $value . "<br/>";
        }
        if ($index === "Sexe") {
            if ($value === true) {
                echo "<b>" . $index . "</b> : " . "Homme <br/>";
            } else {
                echo "<b>" . $index . "</b> : " . "Femme <br/>";
            }
        }
    }
}

?>
<?php

include("./common/footer.php");
?>
<!-- echo "<img src='sources/images/".$value['Img'] . " 'alt='homme' width='200' height='250'/> <br/>"; -->