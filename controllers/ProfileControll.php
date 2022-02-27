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
            if (strcmp($blerja['User_ID_'],$ID_user)) {
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

    // public function readEvent($ID_user){
    //     $query = $this->db->pdo->query('SELECT * FROM blerjet');
    //     // $query->bindParam(':id', $ID_user);
    //     $blerje = $query->fetchAll();

    //     $blerje_user = array();
    //     foreach($blerje as $blerja){
    //         if (strcmp($blerja['User_ID_'],$ID_user)) {
    //             array_push($blerje_user,$blerja);
    //         }

    //     }

    //     return $blerje_user;
    // }

}
