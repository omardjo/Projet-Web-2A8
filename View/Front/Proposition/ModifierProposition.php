<?php
define('BASE_URL', 'AfficherProposition.php');
//define('','');
//define('','');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>job</title>

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
                    <div class="card-header">Modifier un proposition de projet</div>
                    <div class="card-body bg-light">
                        <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>


                        <form method="POST">

                            <?PHP
                            require_once  '../../../Controller/PropositionC.php';
                            if (isset($_POST['id'])) {
                                $pC = new propositionC();
                                $data = $pC->recuperer($_POST['id']);
                            }

                            if (isset($_POST['modifier'])) {
                                $id = isset($_POST['id']) ? $data['id'] = $_POST['id'] : NULL;
                                $name = isset($_POST['title']) ? $data['titre'] = $_POST['title'] : '';
                                $email = isset($_POST['description']) ? $data['description'] = $_POST['description'] : '';
                                $phone = isset($_POST['TypeProjet']) ?  $data['TypeProjet'] = $_POST['TypeProjet'] : '';
                                $title = isset($_POST['bud/h']) ? $data['budget'] = $_POST['bud/h'] : '';
                                $created = isset($_POST['country']) ? $data['emplacement'] = $_POST['country'] : '';
                                $competences = isset($_POST['competencies']) ? $data['competences'] = $_POST['competencies'] : '';
                                $update = $pC->mettreAjourProposition($data);
                                if ($update) {
                                    header('Location:AfficherProposition.php');
                                } else
                                    echo ("updating error");
                            }



                            ?>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="id"> ID</label>
                                    <input type="text" id="id" class="form-control" name="id" value="<?php echo  $data['id_pr']; ?>" placeholder="Projet#" required >
                                </div> <!-- .form-group -->

                                <div class="form-group">
                                    <label for="title">Titre de votre post de projet</label>
                                    <input type="text" id="title" class="form-control" name="title" value="<?php echo  $data['titre']; ?>" placeholder="Ex:besoin d'aide pour une Présentation PowerPoint" required>
                                </div> <!-- .form-group -->

                                <div class="form-group">

                                    <label for="description">Avec quoi as tu besoin d'aide?</label>
                                    <input type="text" name="description" value="<?PHP echo $data['description'] ?>" id="description" cols="5" class="form-control" required></input>
                                </div> <!-- .form-group -->



                                <div class="form-group">
                                    <label for="projectType">Type de projet</label>
                                    <select id="projectType" name="TypeProjet" class="form-control">
                                            <option value="Select your option" >
                                            selectionner votre option</option>
                                            <option >design
                                            <option>Design</option>
											<option>Video & Audio</option>
											<option>Commercialisation</option>
											<option>Developpement</option>
											<option>Autre </option>
                                    </select>
                                </div> <!-- .form-group -->

                                <div class="form-group">
                                    <label for="budget">Votre budget souhaité(e) pour le Travail de
                                        Pigiste</label>
                                    <select id="budget" name="bud/h" class="form-control">
                                        <option selected>selectionner votre choix </option>
                                        <option <?php echo $data['bud/h'] ? 'selected' : ''; ?>>10$ ou moins</option>
                                        <option <?php echo $data['bud/h'] ? 'selected' : ''; ?>>10-30$</option>
                                        <option <?php echo $data['bud/h'] ? 'selected' : ''; ?>>au-dessus de 30$
                                        </option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="location"> quel est l'emplacement souhaité(e) de Pigiste?
                                    </label>
                                    <select id="country-list" name="country" class="form-control">
                                        <option value="Select your option">selectionner l'emplacement</option>
                                        <option>Afghanistan - AF</option>
                                        <option>Albania - AL</option>
                                        <option>Algeria - DZ</option>
                                        <option>American Samoa - AS</option>
                                        <option>Andorra - AD</option>
                                        <option>Angola - AO</option>
                                        <option>Anguilla - AI</option>
                                        <option>Antigua - AG</option>
                                        <option>Argentina - AR</option>
                                        <option>Armenia - AM</option>
                                        <option>Aruba - AW</option>
                                        <option>Australia - AU</option>
                                        <option>Austria - AT</option>
                                        <option>Azerbaijan - AZ</option>
                                        <option>Bahamas - BS</option>
                                        <option>Bahrain - BH</option>
                                        <option>Bangladesh - BD</option>
                                        <option>Barbados - BB</option>
                                        <option>Barbuda - AG</option>
                                        <option>Belarus - BY</option>
                                        <option>Belgium - BE</option>
                                        <option>Belize - BZ</option>
                                        <option>Benin - BJ</option>
                                        <option>Bermuda - BM</option>
                                        <option>Bhutan - BT</option>
                                        <option>Bolivia - BO</option>
                                        <option>Bonaire - AN</option>
                                        <option>Bosni - BA</option>
                                        <option>Botswana - BW</option>
                                        <option>Brazil - BR</option>
                                        <option>British Guyana - GY</option>
                                        <option>British Virgin Islands - VG</option>
                                        <option>Brunei - BN</option>
                                        <option>Bulgaria - BG</option>
                                        <option>Burkina Faso - BF</option>
                                        <option>Burundi - BI</option>
                                        <option>Cambodia - KH</option>
                                        <option>Cameroon - CM</option>
                                        <option>Canada - CA</option>
                                        <option>Canary Islands - ES</option>
                                        <option>Cape Verde - CV</option>
                                        <option>Cayman Islands - KY</option>
                                        <option>Chad - TD</option>
                                        <option>Channel Islands - GB</option>
                                        <option>Chile - CL</option>
                                        <option>China, People'S Republic Of - CN</option>
                                        <option>Colombia - CO</option>
                                        <option>Congo - CG</option>
                                        <option>Congo, Dem Rep Of - CD</option>
                                        <option>Cook Islands - CK</option>
                                        <option>Costa Rica - CR</option>
                                        <option>Croatia - HR</option>
                                        <option>Curacao - CW</option>
                                        <option>Cyprus - CY</option>
                                        <option>Czech Republic - CZ</option>
                                        <option>Denmark - DK</option>
                                        <option>Djibouti - DJ</option>
                                        <option>Dominica - DM</option>
                                        <option>Dominican Republic - DO</option>
                                        <option>Ecuador - EC</option>
                                        <option>Egypt - EG</option>
                                        <option>El Salvador - SV</option>
                                        <option>England (United Kingdom) - GB</option>
                                        <option>Eritrea - ER</option>
                                        <option>Estonia - EE</option>
                                        <option>Ethiopia - ET</option>
                                        <option>Faeroe Islands - FO</option>
                                        <option>Fiji - FJ</option>
                                        <option>Finland - FI</option>
                                        <option>France - FR</option>
                                        <option>French Guiana - GF</option>
                                        <option>French Polynesia - PF</option>
                                        <option>Gabon - GA</option>
                                        <option>Gambia - GM</option>
                                        <option>Georgia, Republic Of - GE</option>
                                        <option>Germany - DE</option>
                                        <option>Ghana - GH</option>
                                        <option>Gibraltar - GI</option>
                                        <option>Grand Cayman - KY</option>
                                        <option>Great Britain - GB</option>
                                        <option>Great Thatch Island - VG</option>
                                        <option>Great Tobago Island - VG</option>
                                        <option>Greece - GR</option>
                                        <option>Greenland - GL</option>
                                        <option>Grenada - GD</option>
                                        <option>Guadeloupe - GP</option>
                                        <option>Guam - GU</option>
                                        <option>Guatemala - GT</option>
                                        <option>Guinea - GN</option>
                                        <option>Guyana - GY</option>
                                        <option>Guyane - GF</option>
                                        <option>Haiti - HT</option>
                                        <option>Holland - NL</option>
                                        <option>Honduras - HN</option>
                                        <option>Hong Kong - HK</option>
                                        <option>Hungary - HU</option>
                                        <option>Iceland - IS</option>
                                        <option>India - IN</option>
                                        <option>Indonesia - ID</option>
                                        <option>Iraq - IQ</option>
                                        <option>Ireland, Northern - GB</option>
                                        <option>Ireland, Republic Of - IE</option>
                                        <option>Israel - IL</option>
                                        <option>Italy - IT</option>
                                        <option>Ivory Coast - CI</option>
                                        <option>Jamaica - JM</option>
                                        <option>Japan - JP</option>
                                        <option>Jordan - JO</option>
                                        <option>Jost Van Dyke Island - VG</option>
                                        <option>Kazakhstan - KZ</option>
                                        <option>Kenya - KE</option>
                                        <option>Korea, South (South Korea) - KR</option>
                                        <option>Kuwait - KW</option>
                                        <option>Kyrgyzstan - KG</option>
                                        <option>Laos - LA</option>
                                        <option>Latvia - LV</option>
                                        <option>Lebanon - LB</option>
                                        <option>Lesotho - LS</option>
                                        <option>Liberia - LR</option>
                                        <option>Libya - LY</option>
                                        <option>Liechtenstein - LI</option>
                                        <option>Lithuania - LT</option>
                                        <option>Luxembourg - LU</option>
                                        <option>Macau - MO</option>
                                        <option>Macedonia - MK</option>
                                        <option>Madagascar - MG</option>
                                        <option>Malawi - MW</option>
                                        <option>Malaysia - MY</option>
                                        <option>Maldives, Republic Of - MV</option>
                                        <option>Mali - ML</option>
                                        <option>Malta - MT</option>
                                        <option>Marshall Islands - MH</option>
                                        <option>Martinique - MQ</option>
                                        <option>Mauritania - MR</option>
                                        <option>Mauritius - MU</option>
                                        <option>Mexico - MX</option>
                                        <option>Micronesia - FM</option>
                                        <option>Moldova - MD</option>
                                        <option>Monaco - MC</option>
                                        <option>Mongolia - MN</option>
                                        <option>Montenegro - ME</option>
                                        <option>Montserrat - MS</option>
                                        <option>Morocco - MA</option>
                                        <option>Mozambique - MZ</option>
                                        <option>Namibia - NA</option>
                                        <option>Nepal - NP</option>
                                        <option>Netherlands (Holland) - NL</option>
                                        <option>Netherlands Antilles (Caribbean) - AN</option>
                                        <option>Nevis - KN</option>
                                        <option>New Caledonia - NC</option>
                                        <option>New Guinea - PG</option>
                                        <option>New Zealand - NZ</option>
                                        <option>Nicaragua - NI</option>
                                        <option>Niger - NE</option>
                                        <option>Nigeria - NG</option>
                                        <option>Norfolk Island - AU</option>
                                        <option>Norman Island - VG</option>
                                        <option>Norway - NO</option>
                                        <option>Oman - OM</option>
                                        <option>Pakistan - PK</option>
                                        <option>Palau - PW</option>
                                        <option>Panama - PA</option>
                                        <option>Papua New Guinea - PG</option>
                                        <option>Paraguay - PY</option>
                                        <option>Peru - PE</option>
                                        <option>Philippines - PH</option>
                                        <option>Poland - PL</option>
                                        <option>Portugal - PT</option>
                                        <option>Puerto Rico - US</option>
                                        <option>Qatar - QA</option>
                                        <option>Reunion - RE</option>
                                        <option>Romania - RO</option>
                                        <option>Rota - MP</option>
                                        <option>Russia - RU</option>
                                        <option>Rwanda - RW</option>
                                        <option>Saba - AN</option>
                                        <option>Saipan - MP</option>
                                        <option>San Marino - IT</option>
                                        <option>Saudi Arabia - SA</option>
                                        <option>Scotland - GB</option>
                                        <option>Senegal - SN</option>
                                        <option>Serbia - RS</option>
                                        <option>Seychelles - SC</option>
                                        <option>Singapore - SG</option>
                                        <option>Slovak Republic - SK</option>
                                        <option>Slovenia - SI</option>
                                        <option>South Africa, Republic Of - ZA</option>
                                        <option>Soviet Union</option>
                                        <option>Spain - ES</option>
                                        <option>Sri Lanka - LK</option>
                                        <option>St. Barthelemy - GP</option>
                                        <option>St. Christopher - KN</option>
                                        <option>St. Croix Island - VI</option>
                                        <option>St. Eustatius - AN</option>
                                        <option>St. John - VI</option>
                                        <option>St. Kitts And Nevis - KN</option>
                                        <option>St. Lucia - LC</option>
                                        <option>St. Maarten - AN</option>
                                        <option>St. Martin - AN</option>
                                        <option>St. Thomas - VI</option>
                                        <option>St. Vincent - VC</option>
                                        <option>Suriname - SR</option>
                                        <option>Swaziland - SZ</option>
                                        <option>Sweden - SE</option>
                                        <option>Switzerland - CH</option>
                                        <option>Tahiti - PF</option>
                                        <option>Taiwan, Republic Of China - TW</option>
                                        <option>Tanzania - TZ</option>
                                        <option>Thailand - TH</option>
                                        <option>Tinian - MP</option>
                                        <option>Togo - TG</option>
                                        <option>Tortola Island - VG</option>
                                        <option>Trinidad And Tobago - TT</option>
                                        <option>Tunisia - TN</option>
                                        <option>Turkey - TR</option>
                                        <option>Turks And Caicos Islands - TC</option>
                                        <option>U S Virgin Islands - VI</option>
                                        <option>Uganda - UG</option>
                                        <option>Ukraine - UA</option>
                                        <option>Union Island - VC</option>
                                        <option>United Arab Emirates - AE</option>
                                        <option>United Kingdom - GB</option>
                                        <option>United States - US</option>
                                        <option>Uruguay - UY</option>
                                        <option>Uzbekistan - UZ</option>
                                        <option>Vanuatu - VU</option>
                                        <option>Vatican City - IT</option>
                                        <option>Venezuela - VE</option>
                                        <option>Vietnam - VN</option>
                                        <option>Virgin Islands - DS</option>
                                        <option>Wales (United Kingdom) - GB</option>
                                        <option>Wallis & Futuna Islands - WF</option>
                                        <option>Yemen, The Republic Of - YE</option>
                                        <option>Zaire - ZR</option>
                                        <option>Zambia - ZM</option>
                                        <option>Zimbabwe - ZW</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="competencies">Competences</label>
                                    <input type="text" id="competencies" name="competencies" value="<?php echo $data['competences']; ?>" class="form-control" placeholder="Ex:rédaction d'articles et de blogs" required>
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