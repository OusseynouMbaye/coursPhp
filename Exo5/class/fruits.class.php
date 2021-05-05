<?Php
class Fruit
{

    private $name;
    private $poids;
    private $prix;

    public static $fruits = [];

    function __construct($name, $poids,$prix)
    {
        $this->name = $name;
        $this->poids = $poids;
        $this->prix = $prix;
    }
    public function getName()
    {
        return $this->name;
    }
  
    public function __toString()
    {
        $affichage  = $this->getShowImageFruit();;
        $affichage .=  "<b> Nom  : </b> " . $this->name  . "</br>";
        $affichage .=  "<b> Poids: </b> " . $this->poids . "</br>";
        $affichage .= "<b>  Prix : </b> " . $this->prix  . "</br>";

        return $affichage;
    }
    public function getShowImageFruit()
    {
          if (preg_match("/cerise/",$this->name)) {
            return "<img src = 'sources/images/cherry.png' alt='imgage cerise' /> <br/>";
        }
        if (preg_match("/pomme/",$this->name)) {
            return "<img src = 'sources/images/apple.png' alt='imgage pomme' /> <br/>";
        }

     }
}