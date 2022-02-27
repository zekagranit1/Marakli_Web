<!-- 
// require_once('Personi.php');
// if (isset($_POST['register'])){
// $regj= new Personi();
// $regj->setEmri($_POST['emri']);
// $regj->setMbiemri($_POST['mbiemri']);
// $regj->setMosha($_POST['mosha']);
// $regj->setEmail($_POST['email']);
// $regj->setAdresa($_POST['adresa']);
// $regj->setPassword($_POST['password']);

// $regj->insertoDhenat();
// } -->
<?php
require_once '../../controllers/UserControll.php';

$users = new UserControll;
if (isset($_POST['submit'])) {
    // $users->add($_POST);
    $users->comparePass($_POST['password'],$_POST['konfirm'],$_POST);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sign_up.css">
    
    <script>
        function validateForm() {
        var a = document.forms["SignUp"]["emri"].value;
        var b = document.forms["SignUp"]["mbiemri"].value;
        var c = document.forms["SignUp"]["mosha"].value;
        var d = document.forms["SignUp"]["email"].value;
        var e = document.forms["SignUp"]["password"].value;
        var f = document.forms["SignUp"]["konfirm"].value;
        var n = document.forms["SignUp"]["adresa"].value;
        if (!a || !b || !c|| !d|| !e|| !f|| !n) {
        alert("Ju lutem plotsoni te gjitha fushat");
        return false;
    }
        if (c< 16) {
        alert("Mosha duhet te jete mbi 16 vjeq");
        return false;}
        var textcheck = /[A-Z][a-z]*/;
        var passcheck =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
        if (!passcheck.test(e)){
        alert("Password duhet te permbaje: 8 ose me shume karaktere, numra, simbole, dhe te filloj me shkronje te madhe");
        return false;
        }
        if(!(e==f)){
        alert("GABIM! shkruani passin dhe verifikimin sakt");
        return false;
        }
        if (!textcheck.test(a)||!textcheck.test(b)){
        alert("Emri dhe mbiemri duhet te fillojne me shkronje te madhe dhe duhet vetem shkronja");
        return false;
        }
        
}
    </script>
</head>

<body>

    <div class="wrapper" style="background-color:white;">
        <div class="inner">
            <form method="POST" name="SignUp" onsubmit="return validateForm()">
                <h1 style="font-family: 'Montserrat', sans-serif; margin: 10px 0px;">Regjistrohu | <a href="./Login.php"> Log in</a></h1>
                <div class="form-group"></div>
                <div class="form-wrapper">
                    <label for="">Emri:</label>
                    <input name="emri" type="text" class="form-control" placeholder="Filan">
                </div>
                <div class="form-wrapper">
                    <label for="">Mbiemri:</label>
                    <input name="mbiemri" type="text" class="form-control" placeholder="Fisteku">
                </div>
                <div class="form-wrapper">
                    <label for="">Adresa:</label>
                    <input name="adresa" type="text" class="form-control" placeholder="Prishtine, Lagjja: Dardania, Rruga:Sadik Zeneli">
                </div>
                <div class="form-wrapper">
                    <label for="">Email:</label>
                    <input name ="email" type="email" class="form-control" placeholder="email@adress.com">
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Password:</label>
                        <input name="password" type="text" class="form-control" placeholder="password">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Konfirmo Password:</label>
                        <input name="konfirm" type="text" class="form-control" placeholder="confirm">
                    </div>
                </div>
                <div class="form-group form-width">
                    <div class="form-wrapper">
                        <label for="">Mosha:</label>
                        <input name="mosha" type="number" class="mosha form-control" placeholder="">
                    </div>
                    <!-- <div class="form-wrapper gjinia">
                        <label class="gjinia-margin" for="">Gjinia:</label>
                        <div class="check">
                            <input type="radio" name="gender">
                            <label class="radio" for="mashkull">Mashkull</label>
                            <input type="radio" name="gender">
                            <label class="radio" for="femer">Femër</label>
                        </div>
                    </div> -->
                </div>
                <!-- <button id="register" onclick="validation()">Register Now</button> -->
                <button type="submit" onclick="valid()" name="submit">Register Now</button>
            </form>
        </div>
    </div>
</body>

</html>