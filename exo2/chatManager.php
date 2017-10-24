<?php
class chatManager
{
    private $db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    // setter //

    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    public function add(chat $chat)
    {
        $q = $this->db->prepare('INSERT INTO chat set nom=:nom , sexe=:sexe , age=:age , couleur=:couleur');
        $q->bindValue(':nom', $chat->nom());
        $q->bindValue(':sexe', $chat->sexe());
        $q->bindValue(':age', $chat->age());
        $q->bindValue(':couleur', $chat->couleur());
        $q->execute();
    }

    public function get(){
      $q=$this->db->query("SELECT * FROM chat");
      return $q->fetchAll(PDO::FETCH_OBJ);
    }

}
