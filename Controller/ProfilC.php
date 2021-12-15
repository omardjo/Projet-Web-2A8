<?php
require_once   '/xampp/htdocs/TitanTech/config.php';
require_once   '/xampp/htdocs/TitanTech/Model/Profil.php';
$profile = NULL;
class profileC
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


    public function ajouterProfile($profile)
    {
        $db = config::getConnexion();
        $sql = "INSERT INTO `profiles`(nom,prenom,titre) VALUES (:nom,:prenom,:titre)";
        try {

            $req = $db->prepare($sql);
            $req->bindValue(':nom', $profile->getNom());
            $req->bindValue(':prenom', $profile->getPrenom());
            $req->bindValue(':titre', $profile->getTitre());

        

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }


    public function afficherprofile()
    {

        $sql = "SElECT * From `profiles` ORDER BY  profiles.Reviews desc  limit 0 ,6 ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);


            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function recupererProfile($id_profile)
    {
       $query = "SELECT * FROM profiles WHERE id_p=$id_profile";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
                
            }
        }
        return ($data);
       
    }

    public function supprimerprofile($id_profile)
    {
        $db = config::getConnexion();
        $sql = "DELETE FROM profiles where id_p= :id_profile";

        $req = $db->prepare($sql);
        $req->bindValue(':id_profile', $id_profile);
        try {

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }


    public function mettreAjourprofile($data)
    {
        //echo 'helllo world';

        $query = "UPDATE profiles SET `prenom` ='$data[prenom]', `nom`='$data[nom]',`Titre`='$data[description]' WHERE id_p='$data[id]'";

        if ($this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }





    public function rechercheprofile(){
		if(isset($_POST['recherche'])){
			$data = array('recherche' => $_POST['recherche']);
		}
    
		$profile = profile::Trouverprofile($data);
        return $profile;
        


	} 


    /*public function rechercheprofileParCategories()
    {
        if(isset($_POST['Typeprofiles'])){
			$data = array('rechercheC' => $_POST['Typeprofiles']);
		}
		$pR = profile::TrouverprofileParCategories($data);
        return $pR;

    }
    */
    
    
    
}
