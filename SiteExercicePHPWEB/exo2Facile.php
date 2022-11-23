<?php ob_start();

$titre = "exo2";
?>


QUESTION 1


<?php
$identite = [array("nom" => "Marie" , "Age" => "30", "Homme" => false),
array("nom" => "Pierre" , "Age" => "32", "Homme" => true)];
?>


<form action="" method="POST">
    <div class="container border border-dark ">
        <label>Résultat affichage : </label>
        <?php for($i = 0 ; $i < count($identite); $i++) : ?>
           <p> <?php echo $identite[$i]["Homme"] == true ? $identite[$i]["nom"] . $identite[$i]["Age"] . "Homme" :  $identite[$i]["nom"] . $identite[$i]["Age"] ."Femme" ?></p>
        <?php endfor ?>
    </div>
</form>

QUESTION 2

<form action="" method="POST">
<div class="container border border-dark ">
    <label>Pair ou impair</label>
<?php
    $pair = null;
    $nombre1 = 5;

if ($nombre1%2 == $pair){
    echo "c'est pair";
} elseif ($nombre1 != $pair){
    echo "c'est impair";
}
?>
<p><?php echo $nombre1 . $pair ?></p>

<?php 
$pair = null;
$nombre2 = 122;

if ($nombre2%2 == $pair){
    echo "c'est pair";
} elseif ($nombre2 != $pair){
    echo "c'est impair";
}
?>
<p><?php echo $nombre2 . $pair ?></p>
</div>
</form>


QUESTION 3
<form action="" method="GET">



</form>

<?php
$content = ob_get_clean();
require "template.php";
?>