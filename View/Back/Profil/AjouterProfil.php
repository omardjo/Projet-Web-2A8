<?php
$p = null;
$error = "";
include_once  '/xampp/htdocs/TitanTech/Controller/ProfilC.php';
include_once '/xampp/htdocs/TitanTech/Model/Profil.php';
define('BASE_URL', 'http://localhost/TitanTech/View/Front/Proposition/AfficherProfil.php');
if (isset($_POST['submit'])) {

    if (isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['description'])) {
        $p = new profile($_POST['prenom'], $_POST['nom'], $_POST['description']);
        $pc = new profileC($p);
        $pc->ajouterProfile($p);
        header('Location:AfficherProfil.php');
    }
}
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
            <a class="navbar-brand page-scroll" href="../../Front/Template/template.html">TitanTech</a>
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
                    <div class="card-header">Ajouter le Meilleur profil de compétences</div>
                    <div class="card-body bg-light">
                        <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>
                        <form method="post">
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="dateDebut">Prenom</label>
                                    <input type="text" id="prenom" name="prenom" class="form-control" required>

                                    <label for="dateFin">Nom </label>
                                    <input type="text" id="nom" name="nom" class="form-control" required>
                                    <label for="description">Description </label>
                                    <input type="description" id="description" name="description" class="form-control" required>
                                </div>
                                <!-- .form-group -->
                            </div><!-- .form-group -->
                        



                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>









</body>

</html>