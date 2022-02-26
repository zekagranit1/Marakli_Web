<?php
require_once '../../controllers/eventControll.php';

$eventi = new EventControll();

if (isset($_POST['submit'])) {
    $eventi ->insert($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/EventetAdd.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>
    <div class="main">
        <div class="intro">
            <h1>Add Event</h1>
            <h2>This is where you can add an upcoming or past event</h2>
            <h4 class="tips">In the form down below there are a few inputs that are required and other inputs that are not required
                but we recomend you to fill out the form fully so your users will have the best experience while checking out
                past or upcoming events
            </h4>
        </div>

        <div class="shop_item">



            <!--  method="POST" -->
            <form method="POST">
                <div class="foto">
                    <div class="upload">
                        <!-- <input type="file" class="custom-file-input" title=" ">  -->
                        <input type="file" name="uploadfile" id="img" style="display:none;" />
                        <label class="file-input" for="img">Click me to upload image</label>
                    </div>

                </div>
                <div class="container">
                    <label for="emri">Emri i eventit:</label>
                    <input type="text" name="emri" id="emri">

                    <label for="desc">Description:</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>

                    <label for="data">Data dhe ora e zhvillimit te eventit:</label><br>
                    <input type="datetime-local" name="data" id="data">

                    <input type="submit" name="submit" value="Create Event!">

            </form>
        </div>

    </div>

    </div>


</body>

</html>