<?php ob_start();

$titre = "exo 2";
?>


<!-- QUESTION 1 -->


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



<!-- QUESTION 2 -->



<form action="" method="POST">
<div class="container border border-dark ">
    <label>Pair ou impair</label>
<?php
    $pair = null;
    $nombre1 = 5;

if ($nombre1%2 == $pair){
    echo "<br>" . $nombre1 . " c'est pair";
} elseif ($nombre1%2 != $pair){
    echo "<br>" . $nombre1 . " c'est impair";
}
?>


<?php 
$pair = null;
$nombre2 = 122;

if ($nombre2%2 == $pair){
    echo "<br>" . $nombre2 . " c'est pair";
} elseif ($nombre2%2 != $pair){
    echo "<br>" . $nombre2 . " c'est impair";
}
?>

</div>
</form>


<!-- QUESTION 3 -->


<form action="" method="GET">
    <div class="container border border-dark ">
    <input type="text" name="pseudo">
    <input type="number" name="age">
    <button type="submit" name="submit">Validez ici</button>
</form>

<?php 
    $nom = null;
    $age = null;
    if (isset($_GET["submit"])){
    $nom = $_GET ["pseudo"];
    $age = $_GET ["age"];
} ?>
<p><?php echo $nom . " à " . $age . " ans "?></p>
</div>

<!-- Question 4 -->


<form action="" method="POST">
    <div class="container border border-dark">
    <input type="number" name = "nombre">
    <button type="submit" name="résultat">Validez ici</button>

</form>

<?php 
$estPair = null;
if (isset($_POST["résultat"])){
    if ($_POST["nombre"] %2  == 0){
    $estPair = "pair";
}else{
    $estPair = "impair";
}
}
?>
<p><?php echo $estPair ?></p>
</div>


<?php
$content = ob_get_clean();
require "template.php";
?>