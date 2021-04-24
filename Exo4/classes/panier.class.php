<?Php
class Panier
{

    private static $nextIdentifiant = 1;

    private $identifiant;
    private $apples = [];
    private $cherries = [];

    public function __construct()
    {
        //generation de l'identifiant
        $this->identifiant = self::$nextIdentifiant;
        self::$nextIdentifiant++;
    }
    public function addFruit($fruit)
    {
        if ($fruit->getName()=== Fruit::APPLE) {
           $this->apples[] = $fruit;
        } else if ($fruit->getName()=== Fruit::CHERRY) {
            $this->cherries[] = $fruit;
         }
    }
    public function __toString()
    {
        $show = "Voici le contenu d'un panier ".$this->identifiant." : <br/>";
        foreach ($this->apples as $apple) {
            $show .= $apple;
        }

        foreach ($this->cherries as $cherry) {
            $show .= $cherry;
        }
        return $show;
    }
}
