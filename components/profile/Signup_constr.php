<php?
if(isset($_POST["register"])){
$emri = $_POST["emri"];
$mbiemri = $_POST["mbiemri"];
$adresa = $_POST["adresa"];
$email = $_POST["email"];
$password = $_POST["password"];
$konfirm = $_POST["konfirm"];
$mosha =$_POST["mosha"];
$gjinia = $_POST["gjinia"];


class SignupContr{
private $emri;
private $mbiemri;
private $adresa;
private $email;
private $password;
private $konfirm; 
private $mosha;
private $gjinia; 

public function __construct($emri,$mbiemri,$adresa,$email,$password,$konfirm,$mosha, $gjinia){
    $this-> $emri = $emri;
    $this-> $mbiemri = $mbiemri;
    $this-> $adresa = $adresa;
    $this-> $email = $email;
    $this-> $password = $password;
    $this-> $konfirm = $konfirm;
    $this-> $mosha = $mosha;
    $this-> $gjinia = $gjinia;
    }
    function function_alert($message) {
      echo "<script>alert('$message');</script>";
    }
    function emptyInput(){
        $result;
        if(empty( $this-> $emri)||empty( $this-> $mbiemri)||empty( $this-> $adresa)
        ||empty( $this-> $email)||empty( $this-> $password)||empty( $this-> $konfirm)
        ||empty( $this-> $mosha)||empty( $this-> $gjinia)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result; 
    }
    function validimi(){
        if(!preg_match("/^[A-Z][a-z]{0,}/",$this-> $emri")){
            function_alert("EMRI DUHET TE PERMBAJE SHKORNJEN E PARE TE MADHE DHE VETEM SHKRONJA");
        }
        if(!preg_match("/^[A-Z][a-z]{0,}/",$this-> $mbiemri")){
            function_alert("MBIEMRI DUHET TE PERMBAJE SHKORNJEN E PARE TE MADHE DHE VETEM SHKRONJA");
        }
        if(!preg_match("/^[A-Za-z0-9_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z]{2,6}$/",$this-> $email")){
            function_alert("JU LUTEM SHKRUAJENI MIRE EMAILIN");
        }
        if(!preg_match("/^[A-Z]+[A-Za-z.!@#$%^&*-+]+[0-9]{3}$/",$this-> $password")){
            function_alert("PASSWORD DUHET TE PERMBAJE SHKRONJEN E PARE TE MADHE DHE 3 NUMRA NE FUND");
        }
        if($this-> $password !== $this-> $konfirm)){
            function_alert("PASSWORD DUHET TE JETE I BARABART ME PASWORD CONFIRM");
        }
        if(!preg_match("^(1[89]|[2-9][0-9])$",$this-> $mosha")){
            function_alert("MOSHA ME E MADHE SE 18");
        }
    
    }
}
$signup = new SignupContr($emri,$mbiemri,$adresa,$email,$password,$konfirm,$mosha, $gjinia);

}