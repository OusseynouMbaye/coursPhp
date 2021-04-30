<?php 
class Personnage
{
    //attributs statiques
    private static $personnages = [];

	//declaration des proprietés
	private $nom;
	private $img;
	private $age;
	private $sexe;
	private $force;
	private $agilete;

    //constant :On les mets pours des valeurs qu'on ne veut pas modifie 
    //et pour permettre au autres de comprendre
    const HOMME = true;
    const FEMME = false;

    const FORCE_MAX = 9;
    const FORCE_MED = 5;
    const FORCE_MIN = 2;

    const AGILETE_MAX = 9;
    const AGILETE_MED = 5;
    const AGILETE_MIN = 2;

	//contructeur avec parametre
	function __construct($nom, $img, $age, $sexe, $force, $agilete)
	{
		$this->nom = $nom;
		$this->img = $img;
		$this->age = $age;
		$this->sexe = $sexe;
		$this->force = $force;
		$this->agilete = $agilete;
        //renseignment des infor dans le tableau
        self::$personnages[] = $this;
	}
    //Methods
    //recupere(obtenir)
    function getNom(){return $this->nom;}
    function getImg(){return $this->img;}
    function getAge(){return $this->age;}
    function getSexe(){return $this->sexe;}
    function getForce(){return $this->force;}
    function getAgilete(){return $this->agilete;}
    //initialise(defini)
    function setNom($nom){$this->nom = $nom;}
    function setImg($img){$this->img = $img;}
    function setAge($age){$this->age = $age;}
   
    //method static
   public static function getListPersonnage()
   {
       return self::$personnages;
   }
    //function pour afficher les personnages
	function showPerso()
	{
		echo " <b> Nom :</b>" . $this->nom . "<br/>";
		echo " <b> age : </b>" . $this->age . "<br/>";
		echo " <b> Sexe : </b>";
		if ($this->sexe) {
			echo "Homme <br/>";
		} else {
			echo "Femme <br/>";
		}
		echo " <b> Force :</b>" . $this->force . "<br/>";
		echo " <b> Agileté : </b>" . $this->agilete . "<br/>";
	}
	function showInfosPersoTemplates()
	{
		echo "<div class='gauche'> ";
		echo "<img src='sources/images/" . $this->img . "' alt='" . $this->img . "' width='200' height='250' />";
		echo "</div>";
		echo "<div class='gauche'> ";
		$this->showPerso();
		echo "</div>";
		echo "<div class='clearB'></div>";
		echo "<br/>";
	}
}
