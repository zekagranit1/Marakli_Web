<?php
require_once '../../databaze/Database.php';

class ProfileControll{

    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function readBlerje($ID_user){
        $query = $this->db->pdo->query('SELECT * FROM blerjet');
        // $query->bindParam(':id', $ID_user);
        $blerje = $query->fetchAll();

        $blerje_user = array();
        foreach($blerje as $blerja){
            if ($blerja['User_ID_']===$ID_user) {
                array_push($blerje_user,$blerja);
            }

        }

        return $blerje_user;
    }

    public function getItem($id){
        $query = $this->db->pdo->prepare('SELECT * from item WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function readEvent($ID_user){
        $query = $this->db->pdo->query('SELECT * FROM vizitat');
        // $query->bindParam(':id', $ID_user);
        $vizitat = $query->fetchAll();

        $vizitat_user = array();
        foreach($vizitat as $vizit){
            if ($vizit['User_ID_']===$ID_user) {
                array_push($vizitat_user,$vizit);
            }

        }

        return $vizitat_user;
    }

    public function getEvent($id){
        $query = $this->db->pdo->prepare('SELECT * from events WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

}
