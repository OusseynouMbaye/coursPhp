<?php
require_once("class/formatageUtile.php");
include("./common/menu.php");
include("./common/header.php");
// require_once 'class/Autoloader.php';
// Autoloader::register();

?>
<!-- Content Html -->
<div class="container">
<?php echo Utile::manageTitleLevel1('Bienvenue le site dédié à la POO sur php')  ?>
<div class="row">
    <div class="col">
    <h2 class="text-center">Gestion des paniers</h2>
        <div class="mx-auto" style="width: 200px;">
            <a class="btn btn-outline-primary text-center" href="afficherPaniers.php" role="button">Gestion des paniers</a>
        </div>
    </div>
    <div class="col">
    <h2 class="text-center">Gestion des fruits</h2>
        <div class="mx-auto" style="width: 150px;">
            <a class="btn btn-outline-primary mx-auto" href="afficherFruit.php" role="button">Gestion des fruits</a>
        </div>
    </div>
  </div>
</div>
<?php

include("./common/footer.php");
?>