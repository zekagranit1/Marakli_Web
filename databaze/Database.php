<?php
class Database{
    public $pdo;

    public function connectDB(){
        try{
            session_start();
            $link = new PDO('mysql:host=localhost;dbname=marakli_web', 'root','');
            $this->pdo = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
//}//PROFA STYLE
// class Database{
// private $conn = null;
// private $host = "localhost"; // ‘ localhost’
// private $dbname = "marakli_web"; //p.sh L12_CRUD
// private $username = "root"; //p.sh root
// private $password = ""; //p.sh ‘ ’ nuk ka
// public function connectDB(){
// try {
// // Krijo lidhjen / konekcioni
// $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
// $this->username, $this->password);
// // set the PDO error mode to exception

// }
// catch(PDOException $pdoe)
// {
// die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
// }
// return $this->conn;
// }}
}
// ?>