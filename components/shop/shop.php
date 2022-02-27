<?php

require_once '../../controllers/ShopControll.php';
session_start();
$isAdmin = $_SESSION['is_admin'];

$log = $_SESSION['isLoged'];

$user = $_SESSION['id'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="./css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../general components/css/nav_bar.css">
    <script src="../general components/js/nav.js"></script>

</head>

<body>
    <?php include '..\general components\navbar.php'
    ?>
    

    <div class="welcom-div ">
        <div class="title">

            <h2>Marakli t'biciklave Shop</h2>
            <p>Mire se vini ne shopin e Marakli'tbiciklave. Ketu mund te gjeni veshje,stikera dhe aksesor te personalizuar me logo te maraklive. Ndjehuni te sigurt te porositni ngase privatisia dhe prososia do jene te sigurta. </p>
        </div>
        <div class=" filter-holder row">
            <div class="filter"><a href="#section1">Rroba</a></div>
            <div class="filter"><a href="#section2">Aksesor</a></div>
            <div class="filter"><a href="#section3">Stikera</a></div>
            <?php if ($isAdmin == 1) : ?>
                <div class="filter"><a href="./shopAdd.php" style="background: blue;">add item</a></div>
            <?php endif; ?>
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

                            <h3><span><?php echo $item['cmimi'] . "€"; ?></span></h3>
                            
                            <?php if ($log==true): ?>
                            <?php 
                            if (isset($_POST['blej'])) {
                                $shop->insertBlerje($user,$_POST['blej']);
                                echo $_POST['blej'] = null;
                            }
                            ?>
                                    
                                    
                                    <form method="POST">
                                        <input type="submit" name="blej" value="<?php echo $item['id']; ?>">
                                    </form>
                                    <?php endif; ?>
                            <?php if ($isAdmin == 1) : ?>
                                <td><a href="shopEdit.php?id=<?php echo $item['id']; ?>" style="color: black;">EDIT</a></td>
                                <td><a href="shopDel.php?id=<?php echo $item['id']; ?>" style="color: red;">DELETE</a></td>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    
                    <?php
                endif;
            endforeach;
                
                ?>
            



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
                            <h3><span><?php echo $item['cmimi'] . "€"; ?></span></h3>
                            
                            <?php if ($log==true): ?>
                            <?php 
                            if (isset($_POST['blej1'])) {
                                $shop->insertBlerje($user,$_POST['blej1']);
                                echo $_POST['blej1'] = null;
                            }
                            ?>

                            <form method="POST">
                                <input type="submit" name="blej1" value="<?php echo $item['id']; ?>">
                            </form>
                            <?php endif; ?>
                            <?php if ($isAdmin == 1) : ?>
                                <td><a href="shopEdit.php?id=<?php echo $item['id']; ?>" style="color: black;">EDIT</a></td>
                                <td><a href="shopDel.php?id=<?php echo $item['id']; ?>" style="color: red;">DELETE</a></td>
                            <?php endif; ?>
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
                            <h3><span><?php echo $item['cmimi'] . "€"; ?></span></h3>
                            
                            <?php if ($log==true): ?>

                            <?php 
                            if (isset($_POST['blej2'])) {
                                $shop->insertBlerje($user,$_POST['blej2']);
                                echo $_POST['blej2'] = null;
                            }
                            ?>
                            <form method="POST">
                                <input type="submit" name="blej2" value="<?php echo $item['id']; ?>">
                            </form>
                            <?php endif; ?>

                            <?php if ($isAdmin == 1) : ?>
                                <td><a href="shopEdit.php?id=<?php echo $item['id']; ?>" style="color: black;">EDIT</a></td>
                                <td><a href="shopDel.php?id=<?php echo $item['id']; ?>" style="color: red;">DELETE</a></td>
                            <?php endif; ?>
                        </div>
                    </div>

            <?php
                endif;
            endforeach; 
            ?>
        </div>

    </div>

    </div>
    <!-- Button on fixed on bottom right corner of the page -->
    <button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">☝️</button>

    <script src="./js/shop.js"></script>
   
    <?php include '..\general components\footer.php' ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>