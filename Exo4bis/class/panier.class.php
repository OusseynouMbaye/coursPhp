<?Php

class Panier
{
    private static $nextId = 1;

    private  $id;
    private $pommes = [];
    private $cerises = [];

    function __construct()
    {
        $this->id = self::$nextId;
        self::$nextId++;
    }
    public function getIdPanier(){
        return $this->id;
    }
    public function ajouterFruit($fruit)
    {
        if ($fruit->getName() === Fruit::POMME) {
            $this->pommes[] = $fruit;
        }
        if ($fruit->getName() === Fruit::CERISE) {
            $this->cerises[] = $fruit;
        }
    }
    function __toString()
    {
        $affiche = "Voici le contenu du panier" . $this->id . "<br/>";
        foreach ($this->pommes  as $pomme) {
            $affiche .= $pomme;
        }

        foreach ($this->cerises  as $cerise) {
            $affiche .= $cerise;
        }
        return $affiche;
    }
}
