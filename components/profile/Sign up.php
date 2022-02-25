<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sign_up.css">
</head>

<body>

    <div class="wrapper" style="background-color:white;">
        <div class="inner">
            <form action="" method="post">
                <h1 style="font-family: 'Montserrat', sans-serif; margin: 10px 0px;">Regjistrohu | <a href="./Login.php"> Log in</a></h1>
                <div class="form-group"></div>
                <div class="form-wrapper">
                    <label for="">Emri:</label>
                    <input id="emri" type="text" class="form-control" placeholder="filan">
                </div>
                <div class="form-wrapper">
                    <label for="">Mbiemri:</label>
                    <input id="mbiemri" type="text" class="form-control" placeholder="fisteku">
                </div>
                <div class="form-wrapper">
                    <label for="">Creditcard Number:</label>
                    <input id="card" type="text" class="form-control" placeholder="512*******">
                </div>
                <div class="form-wrapper">
                    <label for="">Adresa:</label>
                    <input id="card" type="text" class="form-control" placeholder="Prishtine, Lagjja: Dardania, Rruga:Sadik Zeneli">
                </div>
                <div class="form-wrapper">
                    <label for="">Email:</label>
                    <input id="email" type="text" class="form-control" placeholder="email@adress.com">
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Password:</label>
                        <input id="password" type="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Konfirmo Password:</label>
                        <input id="konfirm" type="password" class="form-control" placeholder="confirm">
                    </div>
                </div>
                <div class="form-group form-width">
                    <div class="form-wrapper">
                        <label for="">Mosha:</label>
                        <input id="mosha" type="number" class="mosha form-control" placeholder="">
                    </div>
                    <div class="form-wrapper gjinia">
                        <label class="gjinia-margin" for="">Gjinia:</label>
                        <div class="check">
                            <input type="radio" name="gender">
                            <label class="radio" for="mashkull">Mashkull</label>
                            <input type="radio" name="gender">
                            <label class="radio" for="femer">Femër</label>
                        </div>
                    </div>
                </div>
                <button id="register" onclick="validation()">Register Now</button>
            </form>
        </div>
    </div>
    <script src="./js/sign up.js"></script>
</body>

</html>