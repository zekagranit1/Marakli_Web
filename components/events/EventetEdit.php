<?php
require_once '../../controllers/eventControll.php';

if (isset($_GET['ID'])) {
    $itemID = $_GET['ID'];
}

$eventi = new EventControll;
$currEvent = $eventi -> edit($itemID);

if (isset($_POST['submit'])) {
    $eventi->update($_POST, $itemID, $currEvent['Foto_eventi']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/EventetEdit.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./js/eventadd.js"></script>

</head>

<body>
    <div class="main">
        <div class="intro">
            <h1>Edit selected event</h1>
            <h2>This is where you can Edit the selected event</h2>
            <h4>To go back please click below</h4>
            <a href="Eventet.php">click to go back</a>
        </div>

        <div class="shop_item">
        <form method="POST">
                <div class="foto" style="background-image: url(<?php echo $currEvent['Foto_eventi']; ?>);">
                    <div class="upload">
                        <!-- <input type="file" class="custom-file-input" title=" ">  -->
                        <input type="file" name="uploadfile" id="img" style="display:none;" onchange="changeName()"/>
                        <label class="file-input" for="img" id="change">Click me to upload image</label>
                    </div>

                </div>
                <div class="container">
                    <label for="emri">Emri i eventit:</label>
                    <input type="text" name="emri" id="emri" value="<?php echo $currEvent['Emri_eventit']; ?>">

                    <label for="desc">Description:</label>
                    <textarea name="desc" id="desc" cols="30" rows="10" ><?php echo $currEvent['Description_e']; ?></textarea>

                    <label for="data">Data dhe ora e zhvillimit te eventit:</label><br>
                    <input type="datetime-local" name="data" id="data" value="<?php echo $eventi->dateFIX($currEvent['Data_e']) ?>">

                    <input type="submit" name="submit" value="Create Event!">

            </form>

        </div>

    </div>


</body>

</html>