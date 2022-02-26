<?php
require_once '../../databaze/Database.php';

class EventControll
{

    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function readEvent()
    {
        $query = $this->db->pdo->query('SELECT * FROM events');
        return $query->fetchAll();
    }

    public function insert($request)
    {
        $randint = rand(1,4);

        if ($request['uploadfile'] != null) {
            $request['uploadfile'] = '../../photos/' . $request['uploadfile'];
        } else {
            $request['uploadfile'] = '../../photos/bg'.$randint.'.jpg';
        }

        $query = $this->db->pdo->prepare('INSERT INTO events(Emri_eventit,Data_e,Description_e,Foto_eventi)
        VALUES (:Emri_eventit,:Data_e,:Description_e,:Foto_eventi)');

        $query->bindParam(':Emri_eventit', $request['emri']);
        $query->bindParam(':Data_e', $request['data']);
        $query->bindParam(':Description_e', $request['desc']);
        $query->bindParam(':Foto_eventi', $request['uploadfile']);

        $query->execute();

        return header('Location: Eventet.php');
    }

    public function validEvent($data)
    {
        $current_date = strtotime((new DateTime())->format("Y-m-d H:i:s")); 
        $upcoming = strtotime($data);  
        if ($current_date < $upcoming) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($ID){
        $query = $this->db->pdo->prepare('SELECT * from events WHERE ID = :ID');
        $query->bindParam(':ID', $ID);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id, $foto){
        
        if ($request['uploadfile']!=null) {
            $request['uploadfile']='../../photos/' .$request['uploadfile'];
        }
        else{
            $request['uploadfile']= $foto;
        }
        $query = $this->db->pdo->prepare('UPDATE events SET Emri_eventit = :Emri_eventit,
        Data_e = :Data_e, Description_e = :Description_e, Foto_eventi = :Foto_eventi WHERE ID = :ID');
        $query->bindParam(':Emri_eventit', $request['emri']);
        $query->bindParam(':Data_e', $request['data']);
        $query->bindParam(':Description_e', $request['desc']);
        $query->bindParam(':Foto_eventi', $request['uploadfile']);
        $query->bindParam(':ID', $id);
        $query->execute();

        return header('Location: Eventet.php');
    }

    public function delete($ID){
        $query = $this->db->pdo->prepare('DELETE from events WHERE ID=:ID');
        $query->bindParam(':ID', $ID);
        $query->execute();

        return header("Location: Eventet.php");
    }

    public function dateFIX($date){
        $arraytemp = explode(" ",$date);
        $realDate = $arraytemp[0]."T".$arraytemp[1];
        return $realDate;
    }

}
