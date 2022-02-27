<?php
require '../../controllers/UserControll.php';
$dhenat=new UserControll();

 $allUsers=$dhenat->readPerson();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href ="css/displayStyle.css" />
    <title>Shfaq dhenat</title>
</head>
<body>
    <div id="a1">
    <table>
        <hr>
            <p>Lista e te dhenave:</p>
        <tr>
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Mosha</th>
            <th>Adresa</th>
            <th>Email</th>
            <th>Password</th>

        </tr>
<tr>
<?php
    foreach($allUsers as $key=>$value){
?>
    <td><?php echo $value['Emri']?></td>
    <td><?php echo $value['Mbiemri']?></td>
    <td><?=$value['Mosha']?></td>
    <td><?=$value['Adresa']?></td>
    <td><?=$value['Email']?></td>
    <td><?=$value['Pass']?></td>
</tr>
<?php
}
?>
        </table>
    </div>
</body>
</html>
