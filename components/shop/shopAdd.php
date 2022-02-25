<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/shopAdd.css">
    <link rel="stylesheet" href="../general components/css/navbar.css">
    <link rel="stylesheet" href="../general components/css/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>

<!-- sdi pse spo bon  -->
<?php include '..\general components\navbar.php';
      
?>

    <div class="main">
        <div class="intro">
            <h1>Add shop item</h1>
            <h2>This is where you can add a shop item</h2>
            <h4 class="tips">In the form down below there are a few inputs that are required and other inputs that are not required
                but we recomend you to fill out the form fully so your clients will have the best experience while checking out
                your products or buying something ;)
            </h4>
        </div>

        <div class="shop_item">
            <div class="foto">
                <!-- <div>

                    <h1 class="upload">+ Upload Image +</h1>
                    <input id="inputFile" class="file-upload" type="file" accept="image/*" />
                </div> -->
                <div class="upload">
                    <!-- <input type="file" class="custom-file-input" title=" ">  -->
                    <input type="file" name="uploadfile" id="img" style="display:none;"/>
                    <label class="file-input" for="img">Click me to upload image</label>
                </div>

            </div>
            <div class="container">

            <!--  method="POST" -->
                <form action="">

                    <label for="emri">Emri:</label>
                    <input type="text" name="emri" id="emri">

                    <label for="desc">Description:</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>

                    <label for="price">Price:</label><br>
                    <input type="number" name="price" id="price" min="0.00" max="1000.00" step="0.01" />

                    <input type="submit" value="Create shop item!">

                </form>
            </div>

        </div>

    </div>

<!-- sdi pse spo bon -->

    <?php include '..\general components\footer.php'?>

</body>

</html>