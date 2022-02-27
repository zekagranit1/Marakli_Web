<?php
require_once '../../controllers/eventControll.php';
session_start();
$isAdmin = $_SESSION['is_admin'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eventet </title>
    <link rel="stylesheet" href="Event.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../general components/css/nav_bar.css">
    <script src="../general components/js/nav.js"></script>

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
    </div> -->
    <div class="main">


        <h1 class="nen_titull">Upcoming events</h1>
        <div class="container">

            <?php
            $eventet = new EventControll();
            $events = $eventet->readEvent();

            foreach ($events as $event) :
                $randint = rand(1,4);
                if ($eventet->validEvent($event['Data_e'])) :

            ?>

                    <div class="eventet ">
                        <img class="upfoto " src="<?php echo $event['Foto_eventi']; ?>" alt="no image">
                        <div class="text ">
                            <h3><?php echo $event['Emri_eventit']; ?></h3>
                            <p class="ora ">ORA dhe data:</p>
                            <p class="ora "><?php echo $event['Data_e']; ?></p>
                            <button >Going</button>
                            <p class="read ">Hold to read more</p>
                            <?php if ($isAdmin==1):?>
                            <td><a href="EventetEdit.php?ID=<?php echo $event['ID']; ?>" >EDIT</a></td>  
                            <td><a href="EventetDel.php?ID=<?php echo $event['ID']; ?>" style="color: red;">DELETE</a></td>
                            <?php endif;?>
                            <!-- <div class="overlay">

                                <p class="description ">
                                    <?php echo $event['Description_e']; ?>
                            </div> -->

                        </div>
                    </div>
            <?php
                endif;
            endforeach;
            ?>

        </div>
        <h1 class="nen_titull">Past events</h1>

        <div class="container1">
            <?php
            foreach ($events as $event) :
                if (!($eventet->validEvent($event['Data_e']))) :

            ?>
                    <div class="eventet">
                        <img class="upfoto " src="<?php echo $event['Foto_eventi']; ?>" alt="no image">
                        <div class="text active ">
                            <h3><?php echo $event['Emri_eventit']; ?></h3>
                            <p class="ora ">ORA dhe data:</p>
                            <p class="ora "><?php echo $event['Data_e']; ?></p>
                            <button id="review">Review</button>
                            <?php if ($isAdmin==1):?>
                            <td><a href="EventetEdit.php?ID=<?php echo $event['ID']; ?>" >EDIT</a></td>  
                            <td><a href="EventetDel.php?ID=<?php echo $event['ID']; ?>" style="color: red;">DELETE</a></td>
                            <?php endif;?>
                            <!-- <div class="overlay">

                                <p class="description ">
                                    <?php echo $event['Description_e']; ?>
                            </div> -->
                        </div>
                        <!-- ne overlay e shtin veq desc te objektit edhe punon super tani me kod te w3schools :D -->

                    </div>

            <?php
                endif;
            endforeach;
            ?>

        </div>
    </div>
    <?php include '..\general components\footer.php'
    ?>
    <!-- <footer style="padding: 30px;">
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
    <script src="event.js "></script>
</body>

</html>