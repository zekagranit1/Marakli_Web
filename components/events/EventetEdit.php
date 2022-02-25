<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/EventetEdit.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>
    <div class="main">
        <div class="intro">
            <h1>Edit selected event</h1>
            <h2>This is where you can Edit the selected event</h2>
            <h4>To go back please click below</h4>
            <button>click to go back</button>
        </div>

        <div class="shop_item">
            <div class="foto">
                <!-- <div>

                    <h1 class="upload">+ Upload Image +</h1>
                    <input id="inputFile" class="file-upload" type="file" accept="image/*" />
                </div> -->
                <div class="upload">
                    <!-- <input type="file" class="custom-file-input" title=" ">  -->
                    <input type="file" name="uploadfile" id="img" style="display:none;" />
                    <label class="file-input" for="img">Click me to upload image</label>
                </div>

            </div>
            <div class="container">

                <!--  method="POST" -->
                <form action="">

                    <label for="emri">Emri i eventit:</label>
                    <input type="text" name="emri" id="emri">

                    <label for="desc">Description:</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>

                    <label for="data">Data dhe ora e zhvillimit te eventit:</label><br>
                    <input type="datetime-local" name="data" id="data">

                    <input type="submit" value="Edit this Event!">

                </form>
            </div>

        </div>

    </div>


</body>

</html>