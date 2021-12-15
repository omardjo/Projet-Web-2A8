<?PHP
require_once "../../../Model/Proposition.php";
require_once "../../../Controller/PropositionC.php";


if($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['id']) )
		$pC = new propositionC();
		$pC->SupprimerProposition($_GET["id"]);
        header("Location:AfficherProposition.php");


}
