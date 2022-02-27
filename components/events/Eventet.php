<?php
// error_reporting(0);
require_once '../../controllers/eventControll.php';
session_start();
$isAdmin = $_SESSION['is_admin'];

$log = $_SESSION['isLoged'];

$user = $_SESSION['id'];
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
    <?php include '..\general components\navbar.php';

    // $nav = new navbar($_SESSION['isLoged'],$_SESSION['emri'],$_SESSION['mbiemri']);
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
        <?php ?>

        <h1 class="nen_titull">Upcoming events </h1>
        <?php if ($isAdmin == 1) : ?>
            <a href="EventetAdd.php" style="font-size:25px  ; color:red" class="comand"> Create event</a>
        <?php endif; ?>
        <div class="container">

            <a>
                <?php
                $eventet = new EventControll();
                $events = $eventet->readEvent();

                foreach ($events as $event) :
                    $randint = rand(1, 4);
                    if ($eventet->validEvent($event['Data_e'])) :

                ?>

                        <div class="eventet ">
                            <div class="upfoto ">
                                <img src="<?php echo $event['Foto_eventi']; ?>" alt="no image">
                                <div class="overlay">

                                    <p class="description ">
                                        <?php echo $event['Description_e']; ?>
                                </div>
                            </div>
                            <div class="text ">
                                <h3><?php echo $event['Emri_eventit']; ?></h3>
                                <p class="ora ">Ora dhe data:</p>
                                <p class="ora "><?php echo $event['Data_e']; ?></p>

                                <?php if ($log == true) : ?>
                                    <?php
                                    if (isset($_POST['vizito'])) {
                                        $eventet->insertEvent($user, $_POST['vizito']);
                                        echo $_POST['vizito'] = null;
                                    }
                                    ?>


                                    <form method="POST">
                                        <input type="submit" name="vizito" value="<?php echo $event['ID']; ?>">
                                    </form>
                                <?php endif; ?>
                                <p class="read">Hold picture to read more</p>
                                <?php if ($isAdmin == 1) : ?>
                                    <td><a href="EventetEdit.php?ID=<?php echo $event['ID']; ?>" class="comand">EDIT</a></td>
                                    <td><a href="EventetDel.php?ID=<?php echo $event['ID']; ?>" class="comand" style="color: red;">DELETE</a></td>
                                <?php endif; ?>

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
                        <div class="upfoto ">
                            <img src="<?php echo $event['Foto_eventi']; ?>" alt="no image">
                            <div class="overlay">

                                <p class="description ">
                                    <?php echo $event['Description_e']; ?>
                            </div>
                        </div>
                        <div class="text active ">
                            <h3><?php echo $event['Emri_eventit']; ?></h3>
                            <p class="ora ">Ora dhe data:</p>
                            <p class="ora " style="padding-bottom: 5px;"><?php echo $event['Data_e']; ?></p>
                            <!-- <button id="review">Review</button>  -->
                            <p class="read ">Hold picture to read more</p>
                            <?php if ($isAdmin == 1) : ?>
                                <a href="EventetEdit.php?ID=<?php echo $event['ID']; ?>" class="comand">EDIT</a>
                                <a href="EventetDel.php?ID=<?php echo $event['ID']; ?>" class="comand" style="color: red;">DELETE</a>
                            <?php endif; ?>
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

    <script src="event.js "></script>
</body>

</html>