<?php
/*constante :faire ca pour des valeurs qui ne changeront jamais */
define("SEPARATOR","-");//

$nomDuJoueur1 = "Ousseynou";
$ageDuJoueur1 = 10;
$estUnHommeJoueur1 = true;

$nomDuJoueur2 = "Ami";
$ageDuJoueur2 = 18;
$estUnHommeJoueur2 = false;

generateSeparator(SEPARATOR);
afficherJoueur($nomDuJoueur1, $ageDuJoueur1, $estUnHommeJoueur1);
generateSeparator(SEPARATOR);
afficherJoueur($nomDuJoueur2, $ageDuJoueur2, $estUnHommeJoueur2);
generateSeparator(SEPARATOR);
testAge($ageDuJoueur1, $ageDuJoueur2);
generateSeparator(SEPARATOR);
$differenceAge = calculDifferenceAge($ageDuJoueur1,$ageDuJoueur2);
echo "La difference d'age est de : " .$differenceAge;
generateSeparator(SEPARATOR);
verifyAge($ageDuJoueur1);
generateSeparator(SEPARATOR);
verifyAge($ageDuJoueur2);
generateSeparator(SEPARATOR);

function afficherJoueur($nom, $age, $sexe)
{
    echo ("nom du joueur :" . $nom);
    echo "<br/>";
    echo "age du joueur :" . $age;
    echo "<br/>";
    if ($sexe === true) {
        # code...
        echo $nom . " c'est un homme ";
    } else {
        # code...
        echo $nom . " c'est une femme ";
    }
}

function testAge($age1, $age2)
{
    if ($age1 > $age2) {
        # code...
        echo "Joueur 1 est plus age que le joueur 2";
    } else {
        # code...
        echo "Joueur 2 est plus age que le joueur 1";
    }
}
function generateSeparator($separator)
{
    echo "<br/>";
    for ($i=0; $i <50 ; $i++) { 
        # code...
        echo $separator;
    }
    
    echo "<br/>";
}
function calculDifferenceAge($age1, $age2)
{
    $resultat = $age1 - $age2;
    if ($resultat <0) {
        # code...
        $resultat = -$resultat;
    }
    return $resultat;
}
function verifyAge($age){
    if ($age>18) {
        echo ("Il est majeur ");
    } else if($age ===18) {
        echo ("Il est tout juste majeur ");
    } elseif($age >12){
        echo ("Il est ado");
    }else {
        echo("il est un enfant ");
    }
    
}