<?php
class electeur extends personne{
  private $bureau_de_vote,
          $vote;

public function aVoter(bool $v){
  $this->vote = $v;
}
}

 ?>
