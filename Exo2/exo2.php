<?php
include("menu.php");
include("./common/header.php");
include("./common/footer.php");
?>
<h1>Mon formulaire</h1>
<form action="#" method="GET">
    <fieldset>
        <legend>Information</legend>
        <label for="name">First name:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="age">Age :</label><br>
        <input type="number" name="age" id="age"><br>
        <input class="" type="submit" value="Envoyer">
        <!-- <label for="message">Message:</label><br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea> -->
    </fieldset>
</form>
<?php
echo "<div class=\"information\">";
if (isset($_GET["name"])) {
    echo "Le nom est : " . $_GET["name"] . "<br/>";

    if (isset($_GET["age"])) {
        echo "L'age est : " . $_GET["age"];
    }
}
echo "</div>"
?>
<?php

include("./common/footer.php");
?>