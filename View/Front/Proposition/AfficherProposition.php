<?php
include_once '../../../Controller/PropositionC.php';
//define('','');

//$listeProjets = $pC->getALLproposition();
define('Ajout_URL', 'AjouterProposition.php');
define('BASE_URL', '../Template/template.html');

if (isset($_POST['cherche'])) {
    $data = new propositionC();
    $listeProjets = $data->rechercheProposition();
} 
else {
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
    <link rel="stylesheet" href="../../dist/css/styleAfPr.css">
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
    <h4>Des emplois qui pourraient vous plaire</h4>
</center>

<div class="container ">
    <aside class="aside card shadow mr-3">
        <form action="" method="POST">
            <div class="card-header mr-4">
                <h5>filtre
                    <button type="submit" class="btn btn-primary btn-sm float-end" name="rechercherC">chercher</button>
                </h5>
            </div>
            <div class="card-body">
                <h6>liste des catégories</h6>
                    <select id="projectType" name="TypeProjets" class="form-control">
                        <option value="choisir l'option">choisir l'option</option>
                        <option>Design</option>
                        <option>Video & Audio</option>
                        <option>Commercialisation</option>
                        <option>Developpement</option>
                        <option>Autre</option>
                    </select>

            </div>
        </form>
    </aside>
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

                        <tbody>
                            <?php
                            foreach ($listeProjets as $proposition) {
                            ?>



                                <tr>
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

                                    <td scope="row">
                                        <?= '<center>' . '<b>' . '<img src ="../../assets/images/2.jpg" width="50"  height="50">' . 'Titre  :  ' . $proposition['titre'] . '</b></center>'; ?>
                                        <? //= $listeRechercher['titre'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?= '<b>Description' . ' ' . '<i class="fas fa-info"></i>' . '</b>' . '<br>' . '<br>' . $proposition['description']; ?>
                                        <? //= $listeRechercher['description'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?= '<b><div>Type de Projet <i class="fas fa-project-diagram"></i>  </b>' . '<br>' . '<br>' . $proposition['TypeProjet']; ?>
                                        <? //= $listeRechercher['TypeProjet'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?= '<b>Competences <img src ="../../assets/images/5.png" width="50"  height="50">  </b>' . '<br>' . '<br>' . $proposition['competences']; ?>
                                        <? //= $listeRechercher['competences'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?= '<b>Budget/h <img src ="../../assets/images/7.png" width="50"  height="50">  </b>' . '<br>' . '<br>' . $proposition['bud/h']; ?>
                                        <? //= $listeRechercher['bud/h'] ;
                                        ?>
                                    </td>
                                    <td scope="row">
                                        <?= '<b>Emplacement préféré <img src ="../../assets/images/8.png" width="50"  height="50"> </b>' . '<br>' . '<br>' . $proposition['emplacement']; ?>
                                        <? //= $listeRechercher['emplacement'] ;
                                        ?>
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