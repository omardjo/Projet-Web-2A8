
<?PHP

class proposition
{
    private $id = null;
    private $titre = null;
    private $description = null;
    private $TypeProjet = null;
    private $competences = null;
    private $budget = null;
    private $emplacement = null;

    /**
     * proposition constructor.
     * @param $id
     * @param $titre
     * @param $description
     * @param $TypeProjet
     * @param $competences
     * @param $budget
     * @param $emplacement
     */

    public function __construct($titre, $description, $TypeProjet, $competences, $budget, $emplacement)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->TypeProjet = $TypeProjet;
        $this->competences = $competences;
        $this->budget = $budget;
        $this->emplacement = $emplacement;
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



static  public function TrouverProposition($data)
{
        $recherche = $data['recherche'];
        try {
            $query = 'SELECT * FROM projets WHERE titre LIKE ?';
            $stmt = config::getConnexion()->prepare($query);
            $stmt->execute(array( '%' .$recherche. '%'));
           $pR= $stmt->fetchAll(PDO::FETCH_ASSOC);     
            return $pR;
            $stmt->close();
            $stmt = null;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
       
        }
    
}



static  public function TrouverPropositionParCategories($data)
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






    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $id
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     * @return mixed
     */
    public function getTypeProjet()
    {
        return $this->TypeProjet;
    }

    /**
     * @param mixed $TypeProjet
     */
    public function setTypeProjet($TypeProjet)
    {
        $this->TypeProjet = $TypeProjet;
    }

    /**
     * @return mixed
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * @param mixed $competences
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;
    }

    /**
     * @return mixed
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param mixed $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return mixed
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * @param mixed $budget
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;
    }
}