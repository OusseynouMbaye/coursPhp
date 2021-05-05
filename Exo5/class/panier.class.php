<?Php
require_once("class/paniers.manager.php");
class Panier
{
    public static $paniers = [];
    
    private $identifiant;
    private $nomClient;
    private $apples = [];
    private $cherries = [];

    public function __construct($identifant,$nomClient)
    {
      $this->identifiant = $identifant;
      $this->nomClient = $nomClient;
    }

        public function setFruitToPanierFromDB()
    {
        $fruits = PanierManager::getFruitPanier($this->identifiant);
        foreach($fruits as $fruit){
            if(preg_match("/cerise/",$fruit['fruit']))
            {
                $this->cherries[] = new Fruit($fruit['fruit'],$fruit['poids'],$fruit['prix']);
            } else  if(preg_match("/pomme/",$fruit['fruit'])){
                $this->apples[] = new Fruit($fruit['fruit'],$fruit['poids'],$fruit['prix']);
            }
        }
        
       
    }


    public function __toString()
    {
        $show = "<b> Voici le contenu d'un panier :".$this->identifiant." </b> <br/>";
        foreach ($this->apples as $apple) {
            $show .= $apple;
        }

        foreach ($this->cherries as $cherry) {
            $show .= $cherry;
        }
        return $show;
    }
    public  function saveInDB(){
      return  PanierManager::insertInToDB($this->identifiant, $this->nomClient);
    }

    public static function generateUniqueId(){
        return PanierManager::getNbPanierInDB() +1;
    }
}