<?php
include("./common/menu.php");
include("./common/header.php");
include("./common/footer.php");
?>
<!-- Content Html -->

<form action="" method="POST">
	<!-- <label for="tableau">Tableaux: </label> -->
	<!-- <input type="submit" value="show"> -->
</form>
<?php

$monTableau  = [2, 6, 12, 6, 26, 34, 40, 60];
echo "<h2> Tableau :";
foreach ($monTableau as  $value) {
	echo  $value . ",";
}
echo "</h2>";;
if (checkTableau($monTableau) === true) {
	echo "Le tableau contient que des valeurs pairs ";
} else {
	echo "Le tableau ne contient pas que des valeurs pairs ";
}


function checkTableau($tableau)
{
	for ($i = 0; $i < count($tableau); $i++) {
		if ($tableau[$i] % 2 !== 0) {
			return false;
		}
	}
	return true;
}

?>
<?php

include("./common/footer.php");
?>