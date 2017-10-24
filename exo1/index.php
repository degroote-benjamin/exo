<?php
class clio
{
    private $porte;
    private $couleur;
    private static $prix=10000;

    const porte=[3,5];
    const couleur=["2D241E"=>"reglisse","FD6C9E"=>"rose","C4698F"=>"rose bonbon","ED0000"=>"rouge","AD4F09"=>"roux","01D758"=>"emeraude","BABABA"=>"etain","FEFEE0"=>"ecrou"];


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


    public function setPorte(int $p)
    {
      if(in_array($p, self::porte)){
        $this->porte = $p
      }
    }

    public function setCouleur($c)
    {
        foreach (self::couleur as $key => $value) {
            if ($key == $c) {
                $this->couleur = self::couleur[$c];
            }
        }
    }

    public static function setPrix()
    {
        $this->prix = self::$prix;
    }

    public function porte()
    {
        return $this->porte;
    }

    public function couleur()
    {
        return $this->couleur;
    }

    public static function prix()
    {
        return self::$prix;
    }
}

$v = new clio(array("porte"=>5,"couleur"=>"C4698F"));
echo $v->couleur();
echo $v->porte();
