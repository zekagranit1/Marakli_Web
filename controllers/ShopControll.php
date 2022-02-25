<?php 
require_once '../../databaze/Database.php';

class ShopControll{

    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * FROM item');

        return $query->fetchAll();
    }

    public function insert($request){
        // $request['uploadfile']='../photos/' .$request['uploadfile'];
        $query = $this->db->pdo->prepare('INSERT INTO item (item_pic, emri, cmimi)
        VALUES (:item_pic, :emri, :cmimi)');

        $query->bindParam(':item_pic', $request['uploadfile']);
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':cmimi', $request['price']);
        $query->execute();

        return header('Location: shop.php');
    }

}

?>