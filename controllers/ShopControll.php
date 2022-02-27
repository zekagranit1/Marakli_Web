<?php

use ShopControll as GlobalShopControll;

require_once '../../databaze/Database.php';

class ShopControll{

    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readItem(){
        $query = $this->db->pdo->query('SELECT * FROM item');

        return $query->fetchAll();
    }

    public function readCat(){
        $query = $this->db->pdo->query('SELECT * FROM item_cat');
        return $query->fetchAll();
    }

    public function insert($request){

        $randint = rand(1,4);
        if ($request['uploadfile']!=null) {
            $request['uploadfile']='../../photos/' .$request['uploadfile'];
        }
        else {
            $request['uploadfile']='../../photos/default.jpg';
        }
        $query = $this->db->pdo->prepare('INSERT INTO item (item_pic, emri, cmimi, category)
        VALUES (:item_pic, :emri, :cmimi, :category)');

        $query->bindParam(':item_pic', $request['uploadfile']);
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':cmimi', $request['price']);
        $query->bindParam(':category', $request['cat']);
        $query->execute();

        return header('Location: shop.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from item WHERE id = :id');
        $query->bindParam(':id', $id);
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
        $query = $this->db->pdo->prepare('UPDATE item SET item_pic = :item_pic,
        emri = :emri, cmimi = :cmimi, category = :category WHERE id = :id');
        $query->bindParam(':item_pic', $request['uploadfile']);
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':cmimi', $request['price']);
        $query->bindParam(':id', $id);
        $query->bindParam(':category', $request['cat']);
        $query->execute();

        return header('Location: shop.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from item WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: shop.php");
    }

    public function insertBlerje($USER,$ITEM){

        //INSERT INTO `blerjet` (`id`, `Item_ID`, `User_ID`) VALUES (NULL, '', '');
        $query = $this->db->pdo->prepare('INSERT INTO blerjet (Item_ID, User_ID_)
        VALUES (:Item_ID, :User_ID_)');

        $query->bindParam(':Item_ID', $ITEM);
        $query->bindParam(':User_ID_', $USER);
        $query->execute();
        // $loc = 'shop.php?id='.$ITEM;

        // return header('Location: '.$loc);
    }


}



?>
