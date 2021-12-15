<?php
include_once '../../../Controller/ProfilC.php';
//define('','');

//$listeProjets = $pC->getALLproposition();
define('Ajout_URL', 'AjouterProfil.php');
define('BASE_URL', '../Template'); // Template Back



   

    if (isset($_POST['cherche'])) {
        $data = new profileC();
        $listeProfiles = $data->rechercheProfile();
    }
  else
  {
    $data = new profileC();
    $listeProfiles = $data->afficherProfile();
  }


//




?>
<html>


<head>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../../dist/css/style-Nbar.css">
</head>


<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <a class="navbar-brand page-scroll" href="<?php echo BASE_URL ?>">TitanTech</a>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>




    <br> <br> <br> <br> <br>
    <h4 class="card-header" style="margin-left:130px;margin-right:130px">Les meilleurs profiles de compétences</h4>

<div class="container ">

    <div class="row my-10">
        <div class="col-md-12 mx-auto">
            <div class="card">


                <div class="card-body bg-light">
                    <a href="<?php echo Ajout_URL; ?>" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-plus"></i>
                    </a>
                    <form method="POST" class="float-right mb-2 d-flex flex-row">
                        <input type="text" class="form-control" name="recherche" placeholder="Recherche:(par Reviews)">
                        <button class="btn btn-info btn-sm" name="cherche" type="submit"><i
                                class="fas fa-search"></i></button>
                    </form>


                    <table border="1" align="center" class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <th scope="col">#</th>
                            <th scope="col"> NomComplet</th>
                            <th scope="col"> Description</th>
                            <th scope="col"> Reviews</th>
                            <th scope="col">Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listeProfiles as $profile) {
                            ?>



                            <tr>
                                <td scope="row">
                                    <?=  $profile['id_p']; ?>
                                    <? //= $listeRechercher['description'] ;
                                        ?>
                                </td>

                                <td scope="row">

                                    <?=   $profile['nom'] .' '.$profile['prenom'] .'</b></center>'; ?>
                                    <? //= $listeRechercher['titre'] ;
                                        ?>
                                </td>
                                <td scope="row">
                                    <?=  $profile['Titre']; ?>
                                    <? //= $listeRechercher['description'] ;
                                        ?>
                                </td>
                                <td scope="row">
                                    <?= $profile['Reviews']; ?>
                                    <? //= $listeRechercher['description'] ;
                                        ?>
                                </td>

                                <td class="d-flex flex-row">
                                    <form method="POST" class="mr-1" action="ModifierProfil.php">
                                        <input type="hidden" name="id" value=<?= $profile['id_p']; ?>>
                                        <button class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i></button>

                                    </form>
                                    <form method="GET" class="mr-1" action="SupprimerProfil.php">
                                        <input type="hidden" name="id" value=<?= $profile['id_p']; ?>>
                                        <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i></button>

                                    </form>
                                </td>

                            </tr>
                            <?php
                            }
                            //}
                            ?>
                        <tbody>
                    </table>
                </div>







            </div>
        </div>
    </div>
</div>



</body>

</html>