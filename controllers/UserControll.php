<?php
require_once '../../databaze/Database.php';

class UserControll{

    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readPerson(){
        $query = $this->db->pdo->query('SELECT * FROM user');

        return $query->fetchAll();
    }

    public function add($request){

        // echo "<script>
        // alert('Te dhenat jane ruajtur me sukses');
        // document.location='Sign Up.php';
        // </script>";
        // INSERT INTO user ( Emri, Mbiemri, Mosha, Address_, Email, Password_, Is_admin) 
        // VALUES ( 'easf', 'ase', '12', 'esaf', 'fase', 'ase', '0');

        $query = $this->db->pdo->prepare('INSERT INTO user (Emri,Mbiemri,Mosha,Adresa,Email,Pass,Is_admin)
        VALUES (:Emri, :Mbiemri, :Mosha, :Adresa,:Email,:Pass, 0 )');

        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Mbiemri', $request['mbiemri']);
        $query->bindParam(':Mosha', $request['mosha']);
        $query->bindParam(':Adresa', $request['adresa']);
        $query->bindParam(':Email', $request['email']);
        $query->bindParam(':Pass', $request['password']);
        // $query->bindParam(':Is_admin', FALSE);
        $query->execute();

        return header('Location: login.php');

        
    }

    public function comparePass($password, $konfirimi,$request){
        if (!strcmp($password,$konfirimi)){
            $this->add($request);
        }
        else{
        echo "<script>
        alert('GABIM shkruani passin dhe verifikimin sakt');
        document.location='Sign Up.php';
        </script>";
        }
    }

}
?>