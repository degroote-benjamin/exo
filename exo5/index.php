<?php
function chargerClasse($classname)
{
  $entit = __DIR__. '/model/m1/' . $classname.'.php';
  $model = __DIR__. '/model/m2/' . $classname.'.php';
  if(file_exists($entit)){
    require $entit;
  }
  else {
    require $model;
  }
}

spl_autoload_register('chargerClasse');

$bus = new bus(array('immatriculation'=>'000','couleur'=>'rose','etage'=>2));
echo $bus->immatriculation();
echo $bus->couleur();
echo $bus->etage();
$voiture = new voiture(array('immatriculation'=>'000','couleur'=>'rose','porte'=>3));
echo $voiture->immatriculation();
echo $voiture->couleur();
echo $voiture->porte();
 ?>
