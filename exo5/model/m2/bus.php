<?php
class bus extends vehicule{
  private $etage;

  const etage = [0,1,2];

  public function setEtage($e){
    if(in_array($e, self::etage)){
    $this->etage = $e;
  }
  }

  public function etage(){
    return $this->etage;
  }


}

 ?>
