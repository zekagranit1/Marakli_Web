<?php
class Database{
    public $pdo;

    public function __construct(){
        try{
            // session_start();
            $link = new PDO('mysql:host=localhost;dbname=marakli_web', 'root','');
            $this->pdo = $link;
            // session_destroy();
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}
?>