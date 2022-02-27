<?php


session_start();
require '../../controllers/UserControll.php';



if(isset($_POST['login'])){
    setcookie("email",$email, time()+3600*24);
    setcookie("password",$password, time()+3600*24);
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(validateEmptyData($email,$password)){
        header("Location: Login.php");
        
    } else if(vlaidateData($email,$password)){
        header("Location: ../general components/index.php?id=".$_SESSION['id']);
    } else {
        header("Location: Login.php");
        
    }

}

function validateEmptyData($email, $password){
    if(empty($email) || empty($password)){
        return true;
    }
    return false;
}

function vlaidateData($email,$password){
    $dhenat = new UserControll();
    $allUsers = $dhenat->readPerson();
    foreach($allUsers as $user){
        if($user['Email']===$email && $user['Pass']===$password){
            $_SESSION['is_admin'] = $user['Is_admin'];
            $_SESSION['emri'] = $user['Emri'];
            $_SESSION['mbiemri'] = $user['Mbiemri'];
            $_SESSION['mosha'] = $user['Mosha'];
            $_SESSION['email'] = $user['Email'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['isLoged']=TRUE;
            return true;
        }
    }
    return false;
}
?>