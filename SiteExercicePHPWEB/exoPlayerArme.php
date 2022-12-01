<?php ob_start();
$titre = "Player et Arme 2 classes";
require "Arme.php";
require "Player.php";
?>




<?php 
$content = ob_get_clean();
require "template.php";
?>