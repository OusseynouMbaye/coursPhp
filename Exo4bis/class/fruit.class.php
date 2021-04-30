<?Php
class Fruit
{

    private $name;
    private $poids;
    private $prix;

    const POMME = "Pomme";
    const CERISE = "Cerise";

    const POMMEIMG = "apple.png";
    const CERISEIMG = "cherry.png";
    function getName(){
        return $this->name;
    }

    function __construct($name, $poids)
    {
        $this->name = $name;
        $this->poids = $poids;
        $this->prix = $this->getPriceFruit();
    }
    function getPriceFruit()
    {
        if ($this->name === self::POMME) {
            return 25;
        } else if ($this->name === self::CERISE) {
            return 5;
        }
    }
    function __toString()
    {
        $affichage = $this->getImgFruit();
        $affichage .= "Name :".$this->name."<br/>";
        $affichage .= "Poids :".$this->poids."<br/>";
        $affichage .= "Prix :".$this->prix."<br/>";
        return $affichage;
    }

    function getImgFruit(){
        if ($this->name==self::POMME) {
            return "<img src='sources/images/".self::POMMEIMG."' alt='img pomme'/> <br/>";
        } else if ($this->name==self::CERISE) {
            return "<img src='sources/images/".self::CERISEIMG."' alt='img pomme'/> <br/>";
        }
    }
}
