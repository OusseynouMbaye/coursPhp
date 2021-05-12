<?Php
require_once("class/formatageUtile.php");
require_once("class/paniers.manager.php");
require_once("class/fruits.class.php");

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
    public function getId(){
        return $this->identifiant;
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
    public function addFruit($fruit=null){
        if(preg_match("/cerise/",$fruit->getName()))
        {
         $this->apples[] = $fruit;
        }else  if(preg_match("/pomme/",$fruit->getName()))
        {
            $this->cherries[] = $fruit; 
        }
    }

    public function __toString()
    {
        
        $show = Utile::manageTitleLevel2('Contenu du panier :'.$this->identifiant.' : ');
        $show .='<table class="table">';
            $show .= '<thead>';
                $show .='<tr>';
                $show .= ' <th scope="col">Image</th>';
                $show .= ' <th scope="col">Nom</th>';
                $show .=  ' <th scope="col">Poids</th>';
                $show .=  ' <th scope="col">Prix</th>';
                $show .=  ' <th scope="col">Modifier</th>';
                $show .=  ' <th scope="col">Supprimer</th>';
                $show .=  ' </tr>';
                $show .=  ' </thead>';
                $show .=  '<tbody>';   
           
        foreach ($this->apples as $apple) {
            $show .= $this->showFruitPersonnalisé($apple);
           
        }

        foreach ($this->cherries as $cherry) {
            $show .= $this->showFruitPersonnalisé($cherry);
           
        }
                $show .=  '</tbody>';
            $show .=  '</table>';
        return $show;
    }
    /**
     * @param $fruit permet d'afficher l'image, le nom,poid, prix
     *  et les chanmp modifier et supprimer
     * la ligne input type= hidden de passer l'id du fruit dans l'url
     */
    private function showFruitPersonnalisé($fruit){
        $show = ' <td scope="col">'.$fruit->getImageFruitSmall().'</td>';
                $show .= ' <td scope="col">'.$fruit->getName().'</td>';
                $show .=  ' <td scope="col">';
                if (isset($_GET["idFruit"]) && $_GET["idFruit"]===$fruit->getName()) {
                    $show .= '<form action="#" method="POST">';
                        $show .= '<input  type="hidden" name="type" id="type" value="modification"/>';
                        $show .= '<input  type="hidden" name="idFruit" id="idFruit" value="'.$fruit->getName().'"/>';
                        $show .= '<input type="number" id="poidsFruit" name="poidsFruit" value="'.$fruit->getPoids().'"/>';
                   
                }else{
                    $show .= $fruit->getPoids();
                }          
                $show .='</td>';
                $show .=  ' <td scope="col">';
                if (isset($_GET["idFruit"]) && $_GET["idFruit"]===$fruit->getName()) {
                  
                        $show .= '<input type="number" id="prixFruit" name="prixFruit" value="'.$fruit->getPrix().'"/>';          
                }else{
                    $show .= $fruit->getPrix();
                }                 
                $show .='</td>';
                $show .=  ' <td scope="col">';
                if (isset($_GET["idFruit"]) && $_GET["idFruit"]===$fruit->getName()) {
                    $show .= '<input class="btn btn-success" type="submit"  value="Valider">';
                    $show .= '</form >';
                }else{
                    $show .= '<form action="#" method="GET">';
                        $show .= '<input  type="hidden" name="idFruit" id="idFruit" value="'.$fruit->getName().'"/>';
                        $show .= '<input class="btn btn-primary" type="submit"  value="Mofifier">';
                    $show .= '</form>';
                }

                $show .= '</td>';
                $show .=  ' <td scope="col">';
                        $show .= '<form action="#" method="POST">';
                            $show .= '<input  type="hidden" name="idFruit" id="idFruit" value="'.$fruit->getName().'"/>';
                            $show .= '<input  type="hidden" name="type" id="type" value="suppression"/>';
                            $show .= '<input class="btn btn-danger" type="submit"  value="Supprimer">';
                        $show .= '</form>';
                $show .= '</td>';
                
            $show .=  ' </tr>';
            return $show;
    }

    public  function saveInDB(){
      return  PanierManager::insertInToDB($this->identifiant, $this->nomClient);
    }

    public static function generateUniqueId(){
        return PanierManager::getNbPanierInDB() +1;
    }
}