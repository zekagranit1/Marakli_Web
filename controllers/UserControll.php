<?php
require_once '../../databaze/Database.php';

class UserControll{

    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readPerson(){
        $query = $this->db->pdo->query('SELECT * FROM personi');

        return $query->fetchAll();
    }

    public function insert($request){

        echo "<script>
        alert('Te dhenat jane ruajtur me sukses');
        document.location='Sign Up.php';
        </script>";
        // INSERT INTO `personi` ( `Emri`, `Mbiemri`, `Mosha`, `Address`, `Email`, `Password_`, `Is_admin`) 
        // VALUES ( 'easf', 'ase', '12', 'esaf', 'fase', 'ase', '0');

        $query = $this->db->pdo->prepare('INSERT INTO personi (Emri,Mbiemri,Mosha,Adresa,Email,Password_,Is_admin)
        VALUES (:Emri, :Mbiemri, :Mosha, :Adresa, :Email, :Password_, 1)');

        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Mbiemri', $request['mbiemri']);
        $query->bindParam(':Mosha', $request['mosha']);
        $query->bindParam(':Adresa', $request['adresa']);
        $query->bindParam(':Email', $request['email']);
        $query->bindParam(':password_', $request['password']);
        // $query->bindParam(':Is_admin', FALSE);
        $query->execute();

        // return header('Location: Sign Up.php');

      
    }

    // public function comparePass($password, $konfirimi){
    //     if (strcmp($password,$konfirimi)){
    //         return true;
    //     }
    //     return false;
    // }

}
?>