<?php
function chargerClasse($classname)
{
  require $classname.'.php';
}

spl_autoload_register('chargerClasse');

$db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$manager = new chatManager($db);

if (isset($_POST['env']) ){
$chat = new chat(array("Nom"=>$_POST['Nom'],"age"=>$_POST['Age'],"sexe"=>$_POST['Sexe'],"couleur"=>$_POST['Couleur']));
$manager->add($chat);
}
$list=$manager->get();

foreach ($list as $key => $value) {
  ?>
<p><?= $value->Nom ." " . $value->Age . " " . $value->Sexe . " " . $value->Couleur?></p>

  <?php
}
 ?>

 <form class="" action="" method="post">
   <input type="text" name="Nom" value="">
   <input type="number" name="Age" value="">
   <select class="" name="Sexe">
     <?php
      foreach (chat::sexe as $key => $value) {
          ?>
          <option value="<?php echo $value ;?>"><?php echo $value;?></option>
          <?php
      }
        ?>
   </select>
   <select class="" name="Couleur">
     <?php
      foreach (chat::couleur as $key => $value) {
          ?>
          <option value="<?php echo $value ;?>"><?php echo $value;?></option>
          <?php
      }
        ?>
   </select>
   <input type="submit" name="env" value="">
 </form>
