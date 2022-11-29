<?php ob_start();
$titre = "exercice 1 difficile";
?>


<form action="" method="GET">
    <input type="email" class="btn btn-secondary" name="prénom">
    <input type="pass" class="btn btn-secondary" name="mot de passe">
    <button type="submit" name="connexion">Connexion</button>
    <button type="submit" name="déconnexion">Déconnexion</button>
</form>

<?php $nom = "Maxime";
$tab = array("Maxime");
 ?>

<div class="container border border-dark">
<p><?php if (isset($_GET["prénom"]["mot de passe"]["connexion"])) : echo $nom . " est connecté" ; else : echo $nom . " est déconnecté" ; endif?></p>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>