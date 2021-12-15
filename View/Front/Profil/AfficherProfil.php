<?php
include_once '/xampp/htdocs/TitanTech/Controller/ProfilC.php';
$data = new profileC();
$listeProfiles = $data->afficherprofile();
define('BASE_URL', 'http://localhost/TitanTech/View/Front/Template/template.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Profiles</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../dist/css/style-Nbar.css">

    <style>
        .process-item-wrapper {
            -webkit-text-size-adjust: 100%;
            color: #939393;
            zoom: 1.5;
            margin-top: 20px !important;

        }

        .hero {

            zoom: 1.2;
            font-family: 'Montserrat', sans-serif;
            color: #000;
            text-align: center;
            font-size: 56px;
            line-height: 1.2;
            line-height: 50px;
            font-weight: 400;
            color: #fff;
            margin: 0;
            border: 0;
            font-size: 100%;
            font-family: inherit;
            position: relative;
            padding: 170px 0 140px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('../../assets/images/01.jpg');
        }


        .phrase {

            margin-top: 50px;
            text-align: center;
            zoom: 2;

        }

        @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");





        body {
            background: #ececec;
            font-family: Lato, sans-serif;
            font-size: 15px;
            background: #536976;
            background: -webkit-linear-gradient(to right, #ececec, #ececec);
            background: linear-gradient(to right, #ececec, #ececec);
        }

        a,
        a:hover {
            text-decoration: none;
        }

        #content {
            border-radius: 8px;
            padding: 3em 2em 1em 2em;
            background: #fff;
            max-width: 1100px;
            box-shadow: 0 2px 3px rgba(71, 71, 71, 0.3);
            margin: 22vh auto;
        }

        .grid-view {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            flex-flow: row;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
        }


        .grid-view li {
            text-align: center;
            display: flex;
            flex-flow: column;
            margin: 0 0 2em 0;
            padding: 0;
            flex: 0 0 auto;
            width: 31%;
            height: 300px;
            background-size: cover;
            background-position: center;
            border-radius: 30px;
        }

        .grid-view li h3 {
            color: #fff;
            font-size: 1.8em !important;
            font-weight: 500;
            line-height: 1.1em;
            border-bottom: 1px solid rgba(255, 213, 0, 0);
            padding-bottom: 8px;
            text-transform: uppercase;
            text-shadow: 1px 2px 2px rgba(0, 69, 79, 0.7), 1px 2px 10px rgba(0, 69, 79, 0.5);
            transition: all 0.2s ease;
            transform: translateY(260%);

        }

        .grid-view li h2 {
            font-size: 1.4em;
            line-height: 1.2em;
            color: #fff;
            transition: all 0.5s ease;
            transform: translateY(500%);
            font-weight: 400;
            display: none;
        }


        .grid-view li p {
            font-size: 1.2em;
            line-height: 1.2em;
            color: #fff;
            transition: all 0.5s ease;
            transform: translateY(500%);
            font-weight: 400;
            display: none;
        }

        .grid-view li .reviews {
            font-size: 1.2em;
            line-height: 1.2em;
            color: #fff;
            transition: all 0.5s ease;
            transform: translateY(500%);
            font-weight: 400;
            display: none;
        }



        .grid-view li a {
            padding: 24px;
            border-radius: 30px;
            height: 100%;
            overflow: hidden;
            transition: all 0.2s ease;
            background: #ececec;
            background: linear-gradient(0deg, #ececec 0%, rgba(0, 180, 208, 0) 50%, rgba(0, 180, 208, 0) 100%);
        }

        .grid-view li a:hover {
            background: linear-gradient(0deg, #ececec 0%, rgba(0, 180, 208, 0.5) 100%);
        }

        .grid-view li a:hover h3,
        .grid-view li a:hover p,
        .grid-view li a:hover h2,
        .grid-view li a:hover .reviews {
            transform: translateY(0%);
            display: block;

            ;
        }

        .grid-view a:hover h3 {
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }
    </style>



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

<body>
    <div class="hero">
        <div class="container">

            <h1>Votre brillant avenir commence ici et maintenant</h1>
            <p>Trouver votre prochain pigiste sur titantech</p>




        </div>

    </div>



    <div class="post-hero bg-light">

        <div class="container">

            <div class="process-item-wrapper">

                <div class="row">

                    <div class="col-sm-3">

                        <div class="process-item clearfix">



                            <div class="content">
                                <h5>
                                    <div class="icon">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>01 / Parcourir
                                </h5>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="process-item clearfix">


                            <div class="content">
                                <h5>
                                    <div class="icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>02 / Acheter
                                </h5>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="process-item clearfix">



                            <div class="content">
                                <h5>
                                    <div class="icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>

                                    </div>03 / Approver
                                </h5>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="phrase bg-light"> Inspirez-vous de profilés comme ceux-ci</div>
    <!-- partial:index.partial.html -->
    <div id="content">



        <ul class="grid-view" class="col-md-8 mx-auto">
            <?php foreach ($listeProfiles as $profile) {
            ?>
                <li style="background-image: url('../../assets/images/3.gif');">
                    <a>
                        <h3><?php echo 'Profile'; ?></br> <?php echo '#' . $profile['id_p']; ?></h3>
                        <p> <?php echo $profile['Titre']; ?></p>
                        <h2><?php echo '<center>' . $profile['nom'] . $profile['prenom'] . '</center>';  ?></h2>
                        <div class="reviews"> <?php echo 'Reviews : ' . $profile['Reviews']; ?> </div>

                    </a>
                </li>
            <?php } ?>
        </ul>

    </div>
    <!-- partial -->


</body>

</html>