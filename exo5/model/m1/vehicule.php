<?php
abstract class vehicule
{
    private $immatriculation;
    private $couleur;

    const couleur=["reglisse","rose","rose bonbon","rouge","roux","emeraude","etain","ecrou"];

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    
    public function setImmatriculation($i)
    {
        $this->immatriculation = $i;
    }

    public function setCouleur($c)
    {
        if (in_array($c, self::couleur)) {
            $this->couleur = $c;
        }
    }

    public function couleur()
    {
        return $this->couleur;
    }

    public function immatriculation()
    {
        return $this->immatriculation;
    }
}
