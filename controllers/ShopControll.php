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
        if ($request['uploadfile']!=' ') {
            $request['uploadfile']='../../photos/' .$request['uploadfile'];
        }
        else {
            $request['uploadfile']='../../photos/bg1.jpg';
        }
        $query = $this->db->pdo->prepare('INSERT INTO item (item_pic, emri, cmimi)
        VALUES (:item_pic, :emri, :cmimi)');

        $query->bindParam(':item_pic', $request['uploadfile']);
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':cmimi', $request['price']);
        $query->execute();

        return header('Location: shop.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from item WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        if ($request['uploadfile']!=' ') {
            $request['uploadfile']='../../photos/' .$request['uploadfile'];
        }
        else {
            $request['uploadfile']='../../photos/bg1.jpg';
        }
        $query = $this->db->pdo->prepare('UPDATE item SET item_pic = :item_pic,
        emri = :emri, cmimi = :cmimi WHERE id = :id');
        $query->bindParam(':item_pic', $request['uploadfile']);
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':cmimi', $request['price']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: shop.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from item WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: shop.php");
    }

}

?>