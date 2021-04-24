<?Php
class Fruit
{
    private $name;
    private $poids;
    private $prix;

    //constante de classe
    const APPLE = "Apple";
    const CHERRY = "Cherry";

    const APPLE_IMG = "apple.png";
    const CHERRY_IMG = "cherry.png";

    function __construct($name, $poids)
    {
        $this->name = $name;
        $this->poids = $poids;
        $this->prix = $this->getPriceFruits($name);
    }
    public function getName()
    {
        return $this->name;
    }
    //function private qui sera accessible just par l'objet prix pourquoi il faut utiliser le this
    function getPriceFruits($name)
    {
        //self:: pour dire l'element lui-meme
        if ($name === self::APPLE) {
            return 50;
        } else if ($name === self::CHERRY) {
            return 15;
        }
    }

    //function qui va nous permettre d'afficher un objet lui-meme
    //elle permet de faire une echo sur objet
    //faire une recherche sur cette fucntion
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
        if ($this->name === self::APPLE) {
            return "<img src ='sources/images/" . self::APPLE_IMG . "' alt='apple image' /> <br/>";
        } else if ($this->name === self::CHERRY) {
            return "<img src ='sources/images/" . self::CHERRY_IMG . "' alt='cherry image'/> <br/>";
        }
    }
}
