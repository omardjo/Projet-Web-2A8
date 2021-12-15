<?php
include_once '/xampp/htdocs/TitanTech/Controller/PropositionC.php';
//define('','');

//$listeProjets = $pC->getALLproposition();
define('Ajout_URL', 'http://localhost/TitanTech/View/Front/Proposition/AjouterProposition.php');
define('BASE_URL', 'http://localhost/TitanTech/View/Front/Template/template.html');

if (isset($_POST['cherche'])) {
    $data = new propositionC();
    $listeProjets = $data->rechercheProposition();
} else {
    $data = new propositionC();
    $listeProjets = $data->afficherProposition();
}

if (isset($_POST['rechercherC'])) {
    $data = new propositionC();
    $listeProjets = $data->recherchePropositionParCategories();
}




//




?>
<html>


<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
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



<center>
    <br> <br> <br> <br> <br>
    <h4 class="card-header" style="margin-left:130px;margin-right:130px">Les meilleurs emplois préférables </h4>
</center>

<div class="container ">
    <div class="row my-10">
        <div class="col-md-12 mx-auto">
            <div class="card">


                <div class="card-body bg-light">
                    <a href="<?php echo Ajout_URL; ?>" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-plus"></i>
                    </a>
                    <form method="POST" class="float-right mb-2 d-flex flex-row">
                        <input type="text" class="form-control" name="recherche" placeholder="Recherche: titre de projet">
                        <button class="btn btn-info btn-sm" name="cherche" type="submit"><i class="fas fa-search"></i></button>
                    </form>


                    <table border="1" align="center" class="table table-bordered table-hover">

                     <thead>
                         <th scope="col">Titre</th>
                         <th scope="col">Description</th>
                         <th scope="col">Type de Projet</th>
                         <th scope="col">Compétences</th>
                         <th scope="col">Bud/h</th>
                         <th scope="col">Emplacement prefére</th>
                         <th scope="col">Action</th>
                     </thead>

                        <tbody>
                            <?php
                            foreach ($listeProjets as $proposition) {
                            ?>



                                <tr>


                                    <td scope="row">
                                        <?=  $proposition['titre']; ?>
                                        <? //= $listeRechercher['titre'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?=  $proposition['description']; ?>
                                        <? //= $listeRechercher['description'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?=  $proposition['TypeProjet']; ?>
                                        <? //= $listeRechercher['TypeProjet'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?=  $proposition['competences']; ?>
                                        <? //= $listeRechercher['competences'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?= $proposition['bud/h']; ?>
                                        <? //= $listeRechercher['bud/h'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?=  $proposition['emplacement']; ?>
                                        <? //= $listeRechercher['emplacement'] ;
                                        ?>
                                    </td>

                                    <td class="d-flex flex-row">
                                        <form method="POST" class="mr-1" action="ModifierProposition.php">
                                            <input type="hidden" name="id" value=<?= $proposition['id_pr']; ?>>
                                            <button class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i></button>

                                        </form>
                                        <form method="GET" class="mr-1" action="SupprimerProposition.php">
                                            <input type="hidden" name="id" value=<?= $proposition['id_pr']; ?>>
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