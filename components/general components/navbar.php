<?php
require_once("constants.php");

// class navbar{
//     public $isLoged;
//     public function __construct($isLoged)
//     {
//         $this->isLoged=$isLoged;
//     }
// }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/"></script>
    <link rel="stylesheet" href="./css/nav_bar.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="topnav" id="navbar">
        <div id="nav-holder">
            <a href="#default" id="logo">Marakli T'Biciklave</a>
            <div id="navbar-right">
                <a class="link" href="<?= APP_URL ?>\components\general components\index.php">Home</a>
                <a class="link" href="../events/Eventet.php">Eventet</a>
                <a class="link" href="../shop/shop.php">Shop</a>
                <!-- <?php if ($_SESSION['isLoged']): ?> -->
                    <a class="link" href="../profile/logout.php">Log out</a>
                    <a class="link" href="../profile/profile.php" ><?php if ($_SESSION['isLoged']){ echo $_SESSION['emri']." ".$_SESSION['mbiemri'];} ?></a>
                <!-- <?php else: ?> -->
                    <a class="link" href="../profile/Login.php">Log in</a>
                    <a class="active" href="../profile/Sign up.php">Join Us</a>
                    <!-- <?php endif;?> -->
            </div>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>

    <script src="./js/nav.js"></script>

</body>

</html>