<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table tr td:last_child {
            width: 120px;
        }
        .td{
            width: 120px;
        }
    </style>
</head>

<body>
    <h1>Tableau de bord</h1>

    <div class="wrapper">
        <div class="container=fluid">
            <div class="rox">
                <div class="col-md-12">
                    <div class="mt--5 mb-3">
                        <h2>Utilisateurs</h2>
                        <a href="create.php" class="btn btn-succes pull-right"><i class="fa fa-plus"></i>New User</a>
                    </div>
                    <!--inclure fichier cnw BDD -->
                    <?php
                    require_once "../php/config.php";

                    $sql = "SELECT * FROM users";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table=-striped">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>ID</th>';
                            echo '<th>Email</th>';
                            echo '<th>MDP</th>';
                            echo '<th>ROLES</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        while($row = mysqli_fetch_array($result)){
                            echo '<tr>';
                                echo '<td>'. $row["id"] . '</td>';
                                echo '<td>'. $row["email"] . '</td>';
                                echo '<td>'. $row["motdepasse"] . '</td>';
                                echo '<td>'. $row["role"] . '</td>';
                                echo '<td class="td">';
                                echo '<a href="read.php?id='.$row["id"].'"class="mr-3" title="vue" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id='.$row["id"].'"class="mr-3" title="mise a jour" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id='.$row["id"].'"class="mr-3" title="delete" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                            echo '</td>';
                            echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                            // lib??re la m??moire
                            mysqli_free_result($result);
                        }else{
                            echo "Oups , pas d'enregistrement trouv?? , veuillez r??essayez ult??rieurement";
                        }
                    } else {
                        echo "Oups , probleme de connexion a la BDD , veuillez r??essayez ult??rieurement";

                    }
                    mysqli_close($link);
                    ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>