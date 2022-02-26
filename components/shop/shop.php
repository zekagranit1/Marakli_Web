<?php

require_once '../../controllers/ShopControll.php';
session_start();
$isAdmin = $_SESSION['is_admin'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="./css/shop.css">

</head>

<body>
    <?php include '..\general components\navbar.php'
    ?>
    <!-- <div id="navbar">
        <div id="nav-holder">
            <a href="#default" id="logo">Marakli T'Biciklave</a>
            <div id="navbar-right">
                <a class="link" href="../general components/home1,1.html">Home</a>
                <a class="link" href="../events/Eventet.html">Eventet</a>
                <a class="link" href="../shop/shop.html">Shop</a>
                <!-- <div>||</div> -->
    <!-- <a class="link" href="../profile/Login.html">Log in</a>
                <a class="active" href="../profile/Sign up.html">Join Us</a>
            </div>
        </div>
    </div> --> -->

    <div class="welcom-div ">
        <div class="title">

            <h2>Marakli t'biciklave Shop</h2>
            <p>Mire se vini ne shopin e Marakli'tbiciklave. Ketu mund te gjeni veshje,stikera dhe aksesor te personalizuar me logo te maraklive. Ndjehuni te sigurt te porositni ngase privatisia dhe prososia do jene te sigurta. </p>
        </div>
        <div class=" filter-holder row">
            <div class="filter"><a href="#section1">Rroba</a></div>
            <div class="filter"><a href="#section2">Aksesor</a></div>
            <div class="filter"><a href="#section3">Stikera</a></div>
            <div class="filter"><a href="./shopAdd.php" style="background: blue;">add item</a></div>
        </div>
    </div>
    <div class="section" id="section1">
        <h2 class="section-head">RROBA</h2>
        <div class="wrap cloths">

            <?php
            $shop = new ShopControll;
            $allItems = $shop->readItem();
            foreach ($allItems as $item) :
                if ($item['category'] == 1) :
            ?>
                    <div class="cloths-item">
                        <img src="<?php echo $item['item_pic']; ?>" alt="no image">
                        <div class="text">
                            <h2><?php echo $item['emri']; ?></h2>
                            <h3><?php echo $item['cmimi']; ?></h3>
                            <?php if ($isAdmin==1):?>
                            <td><a href="shopEdit.php?id=<?php echo $item['id']; ?>" style="color: black;">EDIT</a></td>
                            <td><a href="shopDel.php?id=<?php echo $item['id']; ?>" style="color: red;">DELETE</a></td>
                            <?php endif;?>
                        </div>
                    </div>

            <?php
                endif;
            endforeach; ?>


        </div>
    </div>
    <div class="section" id="section2">
        <h2 class="section-head">AKSESOR</h2>
        <div class="wrap cloths">
            <?php
            foreach ($allItems as $item) :
                if ($item['category'] == 2) :
            ?>
                    <div class="cloths-item">
                        <img src="<?php echo $item['item_pic']; ?>" alt="no image">
                        <div class="text">
                            <h2><?php echo $item['emri']; ?></h2>
                            <h3><?php echo $item['cmimi']; ?></h3>
                            <?php if ($isAdmin==1):?>
                            <td><a href="shopEdit.php?id=<?php echo $item['id']; ?>" style="color: black;">EDIT</a></td>
                            <td><a href="shopDel.php?id=<?php echo $item['id']; ?>" style="color: red;">DELETE</a></td>
                            <?php endif;?>
                        </div>
                    </div>

            <?php
                endif;
            endforeach;

            ?>


        </div>
    </div>
    <div class="section" id="section3">
        <h2 class="section-head">STIKERA</h2>
        <div class="wrap cloths">
            <?php
            foreach ($allItems as $item) :
                if ($item['category'] == 3) :
            ?>
                    <div class="cloths-item">
                        <img src="<?php echo $item['item_pic']; ?>" alt="no image">
                        <div class="text">
                            <h2><?php echo $item['emri']; ?></h2>
                            <h3><?php echo $item['cmimi']; ?></h3>
                            <?php if ($isAdmin==1):?>
                            <td><a href="shopEdit.php?id=<?php echo $item['id']; ?>" style="color: black;">EDIT</a></td>
                            <td><a href="shopDel.php?id=<?php echo $item['id']; ?>" style="color: red;">DELETE</a></td>
                            <?php endif;?>
                        </div>
                    </div>

            <?php
                endif;
            endforeach; ?>
        </div>

    </div>

    </div>
    <!-- Button on fixed on bottom right corner of the page -->
    <button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">☝️</button>

    <script src="./js/shop.js"></script>
    <!-- 
    <footer style="padding: 30px;">
        <div class="flex">
            <div>
                <h4 style="margin-bottom: 20px;">contact</h4>
                <ul>
                    <li>email@email.com</li>
                    <li>049123123</li>
                    <li>+38349321312</li>
                </ul>
            </div>
            <div>
                <h4 style="margin-bottom: 20px;">Quick links</h4>
                <ul>
                    <li><a href="../events/Eventet.html">Events</a></li>
                    <li><a href="../shop/shop.html">Shop</a></li>
                    <li><a href="../general components/home1,1.html">Home</a></li>
                </ul>
            </div>
            <div>
                <h4 style="margin-bottom: 20px;">socials</h4>
                <div style="margin-top: 30px;">

                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>
        </div>

    </footer> -->
    <?php include '..\general components\footer.php' ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>