<?php 
require_once '../../databaze/Database.php';

class EventControll{

    public $db;

    public function __construct()
    {
     $this->db = new Database; 
    }

    public function readEvent(){
        $query = $this -> db -> pdo -> query('SELECT * FROM events');
        return $query->fetchAll();
    }

    public function insert($request){

        if ($request['uploadfile']!=' ') {
            $request['uploadfile']='../../photos/' .$request['uploadfile'];
        }
        else {
            $request['uploadfile']='../../photos/bg1.jpg';
        }

        $query = $this->db->pdo->prepare('INSERT INTO events(Emri_eventit,Data_e,Description_e,Foto_eventi)
        VALUES (:Emri_eventit,:Data_e,:Description_e,:Foto_eventi)');

        $query->bindParam(':Emri_eventit',$request['emri']);
        $query->bindParam(':Data_e',$request['data']);
        $query->bindParam(':Description_e',$request['desc']);
        $query->bindParam(':Foto_eventi',$request['uploadfile']);

        $query->execute();
        
        return header('Location: Eventet.php');
    }

}

?>