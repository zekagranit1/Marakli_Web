<?php 

// if (isset($_POST['submit'])) {
//     $email = $_POST['email'];
//     $emri = $_POST['firstname'];
//     $mbiemri = $_POST['lastname'];
//     $mssg = $_POST['subject'];

//     $mssg = wordwrap($mssg,70);

//     $msg = $emri."-".$mbiemri." qon ket mesazh:\n".$mssg;

//     mail("zekagranit1@gmail.com",$email,$msg);
    
// }

if (isset($_POST['submit'])) {
    echo '<script>
    alert("te dhenat u derguan me sukses ne adresen:\nemail@email.com")
    location.replace("../components/general components/index.php");
    </script>';
    }

?>
