<?php
class voiture extends vehicule{
  private $porte;

  const porte = [3,5];

  public function setPorte($p){
    if (in_array($p, self::porte)) {
        $this->porte = $p;
    }
  }

  public function porte(){
    return $this->porte;
  }
}

 ?>
