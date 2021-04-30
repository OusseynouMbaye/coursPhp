<?php
include("./class/fruit.class.php");
include("./common/menu.php");
include("./common/header.php");

?>
<!-- Content Html -->
<h1>Fruit </h1>

<?php

$pomme1 = new Fruit(Fruit::POMME,100);
$cerise1 = new Fruit(Fruit::CERISE,10);
$pomme2 = new Fruit(Fruit::POMME,150);
$cerise2 = new Fruit(Fruit::CERISE,20);

$fruit = [$pomme1,$cerise1,$pomme2,$cerise2];

foreach($fruit as $fruit){
    echo $fruit ;
    echo"<br/>-----------********<br/>";
}
// echo "<pre>";
// print_r($pomme1);
// print_r($cerise1);
?>
<?php

include("./common/footer.php");
?>