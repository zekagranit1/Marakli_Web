<?php
require_once '../../controllers/ShopControll.php';

// $itemId;
if (isset($_GET['id'])) {
    $itemId = $_GET['id'];
}

$shop = new ShopControll;
$currItem = $shop->edit($itemId);

if (isset($_POST['submit'])) {
    $shop->update($_POST, $itemId);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/shopAdd.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>
    <div class="main">
        <div class="intro">
            <h1>Edit shop item</h1>
            <h2>This is where you can Edit the selected shop item</h2>
            <h4>to go back please click below</h4>
            <a href="./shop.php">click to go back</a>
        </div>

        <div class="shop_item">



            <!--  method="POST" -->
            <form method="POST">

                <div class="foto" style="background-image: url(<?php echo $currItem['item_pic']; ?>);">

                    <div class="upload">
                        <!-- <input type="file" class="custom-file-input" title=" ">  -->
                        <input type="file" name="uploadfile" id="img" style="display:none;" value="<?php echo $currItem['item_pic']; ?>"/>
                        <label class="file-input" for="img">Click me to upload image</label>
                    </div>

                </div>
                <div class="container">
                    <label for="emri">Emri:</label>
                    <input type="text" name="emri" id="emri" value="<?php echo $currItem['emri']; ?>">

                    <label for="price">Price:</label><br>
                    <input type="number" name="price" id="price" min="0.00" max="1000.00" step="0.01" value="<?php echo $currItem['cmimi']; ?>"/>

                    <input type="submit" name="submit" value="Edit shop item!">
                </div>

            </form>
        </div>


    </div>


</body>

</html>