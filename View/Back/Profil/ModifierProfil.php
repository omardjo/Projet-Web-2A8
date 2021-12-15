<?php
$p = null;
$error = "";
include_once  '../../../Controller/ProfilC.php';
include_once '../../../Model/Profil.php';
define('BASE_URL', 'AfficherProfil.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profil</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

    <link rel="stylesheet" href="../../dist/css/style-Nbar.css">
</head>


<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <a class="navbar-brand page-scroll" href="../home/index.html">TitanTech</a>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>




<body>


    <div class="container">
        <div class="row my-4">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Modifier le Meilleur profil de compétences</div>
                    <div class="card-body bg-light">
                        <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>
                        <form method="POST">

                            <?PHP
                            require_once '/xampp/htdocs/TitanTech/Controller/ProfilC.php';
                            if (isset($_POST['id'])) {
                                $pC = new profileC();
                                $data = $pC->recupererProfile($_POST['id']);
                
                            }
                            
                            if (isset($_POST['modifier'])) {
                                $id = isset($_POST['id']) ? $data['id'] = $_POST['id'] : NULL;
                                $prenom = isset($_POST['prenom']) ? $data['prenom'] = $_POST['prenom'] : '';
                                $nom = isset($_POST['nom']) ? $data['nom'] = $_POST['nom'] : '';
                                $description = isset($_POST['description']) ? $data['description'] = $_POST['description'] : '';
                                 $update = $pC->mettreAjourProfile($data);
                               if ($update) {
                                    header('Location:AfficherProfil.php');
                               } else
                                   echo ("updating error");
                             }
                               
                        
                            ?>


                            <div class="form-group">

                                <div class="form-group">
                                <label for="dateDebut">ID</label>
                                    <input type="text" id="id" name="id" class="form-control" value="<?php echo $data['id_p'] ?>" required>

                                    <label for="dateDebut">Prenom</label>
                                    <input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo $data['prenom'] ?>" required>

                                    <label for="dateFin">Nom </label>
                                    <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $data['nom'] ?>" required>
                                    <label for="description">Description </label>
                                    <input type="description" id="description" name="description" class="form-control" value="<?php echo $data['Titre'] ?>" required>
                                </div>
                                <!-- .form-group -->
                            </div><!-- .form-group -->




                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>









</body>

</html>