<?PHP

class profile
{
   // private $id_p = null;
   private $id_p = null;
    private $nom = null;
    private $prenom = null;
    private $titre = null;
    private $Reviews = null;

    /**
     * profil constructor.
     * @param $nom
     * * @param $prenom
     * @param $titre
     */
    public function __construct($nom, $prenom, $titre)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->titre = $titre;
    }

    /* static public function getAll()
    {
        $stmt = config::getConnexion()->prepare('SELECT * FROM projets');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
*/



    static  public function TrouverProfile($data)
{
        $recherche = $data['recherche'];
        try {
            $query = 'SELECT * FROM profiles WHERE Reviews LIKE ?';
            $stmt = config::getConnexion()->prepare($query);
            $stmt->execute(array('%' .$recherche. '%'));
           $pR= $stmt->fetchAll(PDO::FETCH_ASSOC);     
            return $pR;
            $stmt->close();
            $stmt = null;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
       
        }
    
}



    /*static  public function TrouverPropositionPartitre($data)
{
        $recherche = $data['rechercheC'];
        try {
            $query = 'SELECT * FROM projets WHERE TypeProjet LIKE ?';
            $stmt = config::getConnexion()->prepare($query);
            $stmt->execute(array('%' .$recherche. '%'));
           $pR= $stmt->fetchAll(PDO::FETCH_ASSOC);     
            return $pR;
            $stmt->close();
            $stmt = null;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
       
        }
    
}
*/





    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }



    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }


    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    

    /**
     * @return mixed
     */
   // public function getReviews()
    //{
        //return $this->Reviews;
   // }

    /**
     * @param mixed $Reviews
     */
   // public function setReviews($Reviews)
   // {
       // $this->Reviews = $Reviews;
  //  }
}