<?php
include("./common/menu.php");
include("./common/header.php");
include("./common/footer.php");
?>
<!-- Content Html -->
<h1>Affichage hauteur de la pyramide </h1>
<form action="" method="POST">

</form>
<?php
$personnages = [
    $p1 = [
        "Nom" => "Sofia",
        "img"=>"sofia.JPG",
        "Age" => 5,
        "Sexe" => false,
        "force" => 3,
        "Agilité" => 6,
    ],
    $p2 = [
        "Nom" => "Amina",
        "img"=>"amina.JPG",
        "Age" => 2,
        "Sexe" => false,
        "Force" => 8,
        "Agilité" => 9,
    ],
    $p3 = [
        "Nom" => "Watson",
        "img"=>"waton.JPG",
        "Age" => 1,
        "Sexe" => true,
        "Force" => 9,
        "Agilité" => 6,
    ]
];

foreach ($personnages as $index => $value) {
   //echo $index . "<br/>";
   if (is_array($value)) {
      foreach ($value as $key => $value2) {
          echo "<b>". $key . "</b> : ". $value2 . "<br/>";
      }
   }
}


?>
<?php

include("./common/footer.php");
?>
<!-- 
    /*$p1 est le tableau
$key va afficher le nom
$value affichera les valeurs
*/
foreach ($p1 as $key => $value) {
   echo $key . " : ". $value ."<br/>" ;
}
 -->