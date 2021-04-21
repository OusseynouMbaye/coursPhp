<?php
$nomDuJoueur1 = "Ousseynou";
$ageDuJoueur1 = 20;
$estUnHomme = false;
?>
<h1> nom du joueur : <?php echo $nomDuJoueur1 ?></h1>

<br />

<h2> age du joueur : <?php echo $ageDuJoueur1 ?></h2>
<br />
<?php $ageDuJoueur1++ ?>
age du joueur : <?php echo $ageDuJoueur1;
                echo "<br/>";

                if ($estUnHomme === true) {
                  # code...
                  echo "c'est un homme ";
                } else {
                  # code...
                  echo "c'est une femme ";
                }

                test();
                echo "<br/>";
                function test()
                {
                  echo "Attention ";
                }
                $resultats =  2;
                for ($i=1; $i <=10 ; $i++) { 
                  # code...
                  $table = $resultats *$i;
                  echo (  $resultats . " * " .  $i . " = ". $table);
                  
                   echo "<br/>";
                }
                echo "***************";
                echo "<br/>";
                $nombre =  1;
                for ($i=0; $i <=10 ; $i++) { 
                  # code...
                  $addition = $resultats + $i;
                  echo (  $resultats . " + " .  $i . " = ". $addition);
                  
                   echo "<br/>";
                }
                echo "***************";
                $somme = 0;
                for ($i=1; $i <=5 ; $i++) { 
                  # code...
                  $somme += $i;
;                 
                  $i++;
                  
                   echo "<br/>";
                }
                echo $somme;
                ?>