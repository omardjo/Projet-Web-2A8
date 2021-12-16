<?php
require_once   '../config.php';
require_once   '../Model/Proposition.php';
$proposition = NULL;
class propositionC
{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "temp";
    private $conn;

    public function __construct()
    {
        try {

            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }


    public function ajouterProposition($proposition)
    {
        $db = config::getConnexion();
        $sql = "INSERT INTO `projets`(titre,`description`,TypeProjet,competences,`bud/h`,emplacement) VALUES (:titre,:description,:TypeProjet,:competences,:budget,:emplacement)";
        try {

            $req = $db->prepare($sql);
            $req->bindValue(':titre', $proposition->getTitre());
            $req->bindValue(':description', $proposition->getDescription());
            $req->bindValue(':TypeProjet', $proposition->getTypeProjet());
            $req->bindValue(':competences', $proposition->getCompetences());
            $req->bindValue(':budget', $proposition->getBudget());
            $req->bindValue(':emplacement', $proposition->getEmplacement());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }


    public function afficherProposition()
    {
        $sql = "SElECT * From `projets` ORDER BY  projets.id_pr";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);


            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function recuperer($id_proposition)
    {
        $query = "SELECT * FROM projets WHERE id_pr=$id_proposition";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }


    public function supprimerProposition($id_proposition)
    {
        $db = config::getConnexion();
        $sql = "DELETE FROM projets where id_pr= :id_proposition";

        $req = $db->prepare($sql);
        $req->bindValue(':id_proposition', $id_proposition);
        try {

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }


    public function mettreAjourProposition($data)
    {
        //echo 'helllo world';

        $query = "UPDATE projets SET `titre` ='$data[titre]', `description`='$data[description]', TypeProjet='$data[TypeProjet]', competences='$data[competences]' ,`bud/h`='$data[budget]',emplacement='$data[emplacement]' WHERE id_pr='$data[id] '";

        if ($this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }





    public function rechercheProposition(){
		if(isset($_POST['recherche'])){
			$data = array('recherche' => $_POST['recherche']);
            
		}
		$proposition = proposition::TrouverProposition($data);
        return $proposition;

	} 


    public function recherchePropositionParCategories()
    {
        if(isset($_POST['TypeProjets'])){
			$data = array('rechercheC' => $_POST['TypeProjets']);
		}
		$pR = proposition::TrouverPropositionParCategories($data);
        return $pR;

    }
    
    
}
