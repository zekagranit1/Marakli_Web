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
</head>

<body>

    <div class="wrapper" style="background-color:white;">
        <div class="inner">
            <form method="POST">
                <h1 style="font-family: 'Montserrat', sans-serif; margin: 10px 0px;">Regjistrohu | <a href="./Login.php"> Log in</a></h1>
                <div class="form-group"></div>
                <div class="form-wrapper">
                    <label for="">Emri:</label>
                    <input name="emri" type="text" class="form-control" placeholder="filan">
                </div>
                <div class="form-wrapper">
                    <label for="">Mbiemri:</label>
                    <input name="mbiemri" type="text" class="form-control" placeholder="fisteku">
                </div>
                <div class="form-wrapper">
                    <label for="">Adresa:</label>
                    <input name="adresa" type="text" class="form-control" placeholder="Prishtine, Lagjja: Dardania, Rruga:Sadik Zeneli">
                </div>
                <div class="form-wrapper">
                    <label for="">Email:</label>
                    <input name ="email" type="text" class="form-control" placeholder="email@adress.com">
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
                <button type="submit" name="submit">Register Now</button>
            </form>
        </div>
    </div>
    <script src="./js/sign up.js"></script>
</body>

</html>