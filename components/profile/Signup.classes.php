<?php

use LDAP\Result;

class Signup extends DataBase{
   protected function checkUser($emri,$email){
        $stmt = $this->connect()->prepare('SELECT User_ID FROM users WHERE Emri = $emri  OR Email = $email;');
    
    $resultCheck;
    if($stmt->rowCount()>0){
        $resultCheck = false;
    }
    else{
        $resultCheck =true;
    }
    return $resultCheck;
}
}
?>