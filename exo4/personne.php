<?php
abstract class personne{

  private $nom;
  private $prenom;

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
    $this->nom = $n;
  }

  public function setPrenom(string $p){
    $this->prenom = $p;
  }

}

 ?>
