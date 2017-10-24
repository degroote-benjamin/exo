<?php
// declare(strict_type=1);
class chat{
  private $nom,
          $age,
          $sexe,
          $couleur;

const sexe=["M","F"];
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

public function setNom(string $n){
if(strlen($n)<=15){
$this->nom = $n;
}
else{
  echo "nom trop long";
}
}

public function setAge(int $a){
  if($a <=30 && $a>=0){
    $this->age = $a;
  }
  else{
    echo "trop vieux";
  }
}

public function setSexe(string $s){
foreach (self::sexe as $key => $value) {
  if($value == $s){
    $this->sexe=$s;
  }
}
}

public function setCouleur(string $c){
  foreach (self::couleur as $key => $value) {
    if($value == $c){
      $this->couleur=$c;
    }
  }
}


public function nom(){
  return $this->nom;
}

public function age (){
  return $this->age;
}

public function sexe(){
 return $this->sexe;
}

public function couleur(){
  return $this->couleur;
}
}

 ?>
