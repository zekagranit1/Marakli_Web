<?php

session_start();
require '../controllers/UserControll.php';
$dhenat=new UserControll();
$all=$dhenat->readPerson();


if(isset($_POST['login'])){
    setcookie("email",$email, time()+3600*24);
    setcookie("password",$password, time()+3600*24);
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(validateEmptyData($email,$password)){
        header("Location: login.php");
    } else if(vlaidateData($email,$password)){
        header("Location: main.php");
    } else {
        header("Location: login.php");
    }

}

function validateEmptyData($email, $password){
    if(empty($email) || empty($password)){
        return true;
    }
    return false;
}

function vlaidateData($email,$password){
    global $allUsers;
    foreach($allUsers as $user){
        if($user['email']==$email && $user['password']==$password){
            $_SESSION['is_admin'] = $user['is_admin'];
            $_SESSION['emri'] = $user['emri'];
            return true;
        }
    }
    return false;
}
?>