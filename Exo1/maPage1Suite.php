<?php
/*constante :faire ca pour des valeurs qui ne changeront jamais */
define("SEPARATOR", "-"); //
$tabJoueur1 = [
    "nom" => "Ami",
    "age" => 10,
    "estUnHomme" => true
];

$tabJoueur2 = [
    "nom" => "Sofia",
    "age" => 20,
    "estUnHomme" => true
];
$tabJoueur3 = [
    "nom" => [
        "nom " => "Dédé",
        "prenom" => "Didi"
    ],
    "age" => 20,
    "estUnHomme" => true
];


generateSeparator(SEPARATOR);
//afficherJoueur( $tabJoueur1[0], $tabJoueur1[1],$tabJoueur1[2]);
afficherTableau($tabJoueur1);
generateSeparator(SEPARATOR);
//afficherJoueur($tabJoueur2[0], $tabJoueur2[1], $tabJoueur2[2])
afficherTableau($tabJoueur2);
generateSeparator(SEPARATOR);
afficherTableau($tabJoueur3);
generateSeparator(SEPARATOR);
testAge($tabJoueur1["age"], $tabJoueur2["age"]);
generateSeparator(SEPARATOR);
$differenceAge = calculDifferenceAge($tabJoueur1["age"], $tabJoueur2["age"]);
echo "La difference d'age est de : " . $differenceAge;
generateSeparator(SEPARATOR);
verifyAge($tabJoueur1["age"]);
generateSeparator(SEPARATOR);
verifyAge($tabJoueur2["age"]);
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
function afficherTableau($tab)
{
    // $nombreCaseTableau = count($tab);
    // for ($i=0; $i <$nombreCaseTableau ; $i++) { 
    //     echo $tab[$i] . "<br/>";
    // }
    foreach ($tab as $indice => $value) {
        if (!is_array($value)) {
            echo $indice . " : " . $value . "<br/>";
        } else {
            # code...
            // foreach ($value as $subValue) {
            //     echo $subValue . "<br/>";
            // }
            //Utilisation tableau de maniere recursisve
            afficherTableau($value);
        }
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
    for ($i = 0; $i < 50; $i++) {
        # code...
        echo $separator;
    }

    echo "<br/>";
}
function calculDifferenceAge($age1, $age2)
{
    $resultat = $age1 - $age2;
    if ($resultat < 0) {
        # code...
        $resultat = -$resultat;
    }
    return $resultat;
}
function verifyAge($age)
{
    if ($age > 18) {
        echo ("Il est majeur ");
    } else if ($age === 18) {
        echo ("Il est tout juste majeur ");
    } elseif ($age > 12) {
        echo ("Il est ado");
    } else {
        echo ("il est un enfant ");
    }
}
