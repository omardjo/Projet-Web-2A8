<?PHP
require_once "../../../Model/Profil.php";
require_once "../../../Controller/ProfilC.php";


if($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['id']) )
		$pC = new profileC();
		$pC->SupprimerProfile($_GET["id"]);
        header("Location:AfficherProfil.php");


}
