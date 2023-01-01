<?php

if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    // inclure ma connexion
    require_once "../php/config.php";

    // preparer ma requête pour récupérer le user en fonction de l'id
    $sql = "SELECT * FROM articles WHERE id = ? " ;

    if($stmt = mysqli_prepare($link , $sql)){
        mysqli_stmt_bind_param($stmt, "i" , $param_id);

        $param_id = trim($_GET['id']);

        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result , MYSQLI_ASSOC);

                $nom = $row['nom'];
                $description = $row['description'];
                $quantite = $row['quantite'];
                $prix = $row['prix'];
                $categorie = $row['categorie'];

            } else {
                header("location: index.php");
                exit();
            }
        }else{
            echo "Oups , problème de connexion à la BDD, veuillez réessayez ultérieurement";
        }
    }
    // vide la mémoire
mysqli_stmt_close($stmt);

//deconnexion de la BDD
mysqli_close($link);
} else {
    header("location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ (Lecture)</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       
<style>
 .wrapper{
            width : 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Articles</h1>
                    <div class="form-group">
                        <label for="" >Nom</label>
                        <p><?php echo $row["nom"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="" >Description</label>
                        <p><?php echo $row["description"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="" >Quantités</label>
                        <p><?php echo $row["quantite"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="" >Prix</label>
                        <p><?php echo $row["prix"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="" >Catégorie</label>
                        <p><?php echo $row["categorie"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <a href="index.php" class="btn btn-secondary ml-2">Retour</a>
</div>
</body>
</html>