<?php

require_once '../../controllers/ProfileControll.php';
require_once '../../controllers/eventControll.php';
session_start();
// echo $_SESSION['is_admin'];
$id_user = $_SESSION['id'];

$eventet = new EventControll();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>
    <!-- <script src="./js/"></script> -->

    <link rel="stylesheet" href="../general components/css/nav_bar.css">
    <script src="../general components/js/nav.js"></script>
    <link rel="stylesheet" href="./css/profile.css">

</head>

<body style=" margin-top: 80px;">
    <?php include '..\general components\navbar.php';
    ?>
    <div class="main row">
        <div class="profile column">
            <div class="profile-part">

                <div style="text-align: center;">
                    <img class="profile-pic" src="../../photos/marak1.jpg" alt="">
                </div>
                <div class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <div class="text">
                    <h2><?php echo $_SESSION['emri'] . " " . $_SESSION['mbiemri']; ?></h2>
                    <div class="kilometrat">
                        <h3>Kilometrat me marakli: 15km</h3>
                    </div>
                </div>
            </div>
            
            <div class="profile-part">
                <div class="purchases">
                    <h3>Blerjet:</h3>

                    <?php
                    $personi = new ProfileControll();
                    $allBlerje = $personi->readBlerje($id_user);

                    foreach ($allBlerje as $blerja) :
                        
                        $currItem = $personi->getItem($blerja['Item_ID']);
                    ?>
                            <div class="product row">
                                <img src="../../photos/shoping-bag.png" alt="">
                                <div class="prod">
                                    <h3>name: <?php echo $currItem['emri'] ?></h3>
                                    <h4>price: <?php echo $currItem['cmimi']; ?>$</h4>
                                </div>
                            </div>
                    <?php endforeach;
                    // endforeach; ?>
                </div>
            </div>
        </div>



        <div class="events">
            <h1>Eventet qe do marr pjese:</h1>
            <div class="events-holder column">
                <?php 
                
                $allEventet = $personi->readEvent($id_user);

                    foreach ($allEventet as $event) :
                        
                        $currDesc = $personi->getEvent($event['Event_ID']);
                        if ($eventet->validEvent($currDesc['Data_e'])) :
                
                ?>

                <div class="event-card row">
                    <img src="<?php echo $currDesc['Foto_eventi']; ?>" alt="">
                    <div class="info">
                        <!-- $currDesc -->
                        <h2><?php echo $currDesc['Emri_eventit']; ?></h2>
                        <h3><?php echo $currDesc['Data_e']; ?></h3>
                        <p><?php echo $currDesc['Description_e']; ?></p>
                    </div>
                </div>

                <?php 
                endif;
            endforeach;
                    // endforeach; ?>
                

            </div>
            <h1>Eventet e kaluara</h1>
            <div class="events-holder column">
            <?php 
                
                $allEventet = $personi->readEvent($id_user);

                    foreach ($allEventet as $event) :
                        
                        $currDesc = $personi->getEvent($event['Event_ID']);
                        if (!($eventet->validEvent($currDesc['Data_e']))) :
                
                ?>

                <div class="event-card row">
                    <img src="<?php echo $currDesc['Foto_eventi']; ?>" alt="">
                    <div class="info">
                        <!-- $currDesc -->
                        <h2><?php echo $currDesc['Emri_eventit']; ?></h2>
                        <h3><?php echo $currDesc['Data_e']; ?></h3>
                        <p><?php echo $currDesc['Description_e']; ?></p>
                    </div>
                </div>

                <?php 
                endif;
            endforeach;
                    // endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>