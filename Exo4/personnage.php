<?php
require_once("classes/personnageClass.php");//recupere la classe une seule fois
include("./common/menu.php");
include("./common/header.php");


?>
<!-- Content Html -->
<h1>Personnage </h1>

<!-- Content Php -->
<?php
//pour call les constat de la classe personnage Personnage::FEMME
$p1 = new Personnage("Sofia", "sofia.JPG", 5, Personnage::FEMME, Personnage::FORCE_MAX, Personnage::AGILETE_MED);
	//$p1->showInfosPersoTemplates();
//echo  "<br/>--------------------------------<br/>";
$p2 = new Personnage("Amina", "amina.JPG", 2, Personnage::FEMME, Personnage::FORCE_MIN, Personnage::AGILETE_MAX);
	//$p2->showInfosPersoTemplates();
//echo  "<br/>--------------------------------<br/>";
$p3 = new Personnage("Watson", "watson.JPG", 7, Personnage::HOMME, Personnage::FORCE_MED, Personnage::AGILETE_MIN);
	//$p3->showInfosPersoTemplates();

	$persos = Personnage::getListPersonnage();
 	
	foreach ($persos as $perso) {
		$perso->showInfosPersoTemplates();
		echo  "<br/>--------------------------------<br/>";
	}
	
	//print_r($persos);

?>
<?php

include("./common/footer.php");
?>