<?php
require_once('../../databaze/Database.php');

// TE DHENAT
class Personi {
private $id;
private $emri;
private $mbiemri;
private $adresa;
private $email;
private $password;
private $konfirm; 
private $mosha;
private $gjinia; 
// protected $dbconn;
public $db;

public function __construct($emri='',$mbiemri='',$adresa='',$email='',$password='',$konfirm='',$mosha='', $gjinia=''){
    
    $this-> $emri = $emri;
    $this-> $mbiemri = $mbiemri;
    $this-> $adresa = $adresa;
    $this-> $email = $email;
    $this-> $password = $password;
    $this-> $konfirm = $konfirm;
    $this-> $mosha = $mosha;
    $this-> $gjinia = $gjinia;
    $this->db = new Database;
    // $this->dbconn = $this->connectDB();


    }

        public function setId($id){
        $this->id=$id;
        }
        public function getId(){
        return $this->id;
        }
        public function setEmri($emri){
        $this->emri=$emri;
        }
        public function getEmri(){
        return $this->emri;
        }
        public function setMbiemri($mbiemri){
        $this->mbiemri=$mbiemri;
        }
        public function getMbiemri(){
        return $this->mbiemri;
        }
        public function setPassword($password){
        $this->password=$password;
        }
        public function getPassword(){
        return $this->password;
        }
        public function setAdresa($adresa){
        $this->adresa=$adresa;
        }
        public function getAdresa(){
        return $this->adresa;
        }
        public function setMosha($mosha){
            $this->mosha=$mosha;
        }
        public function getMosha(){
        return $this->mosha;
        }
        public function setGjinia($gjinia){
            $this->gjinia=$gjinia;
        }
        public function getGjinia(){
        return 'm';
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function getEmail(){
        return $this->email;
        }
        public function setKonfirm($konfirm){
            $this->konfirm=$konfirm;
        }
        public function getKonfirm(){
        return $this->konfirm;
        }
        
        function insertoDhenat(){
            $sql="INSERT INTO personi(Emri,Mbiemri,Mosha,Adresa,Email,Passwordi) VALUES (?,?,?,?,?,?,?)";
            $stmt=$this->db->pdo->prepare($sql);
            $stmt->bindParam('ssssss',$this->emri,$this->mbiemri,$this->mosha,$this->adresa,$this->email,$this->password);
            $stmt->execute();
            echo "<script>
            alert('Te dhenat jane ruajtur me sukses');
            document.location='Sign Up.php';
            </script>";
            //perktheu dhe pershtati ne shqip Granit Zeka :)
        }


        // if(isset($_POST["register"])){
        //     $emri = $_POST["emri"];
        //     $mbiemri = $_POST["mbiemri"];
        //     $adresa = $_POST["adresa"];
        //     $email = $_POST["email"];
        //     $password = $_POST["password"];
        //     $konfirm = $_POST["konfirm"];
        //     $mosha =$_POST["mosha"];
        //     $gjinia = $_POST["gjinia"];
            
            

//     function function_alert($message) {
//       echo "<script>alert('$message');</script>";
//     }
//     function signupUser(){
//         if($this->emptyInput()==false){
//             header(location: );
//         }
//     }
//     function emptyInput(){
//         $result;
//         if(empty( $this-> $emri)||empty( $this-> $mbiemri)||empty( $this-> $adresa)
//         ||empty( $this-> $email)||empty( $this-> $password)||empty( $this-> $konfirm)
//         ||empty( $this-> $mosha)||empty( $this-> $gjinia)){
//             $result = false;
//         }
//         else{
//             $result = true;
//         }
//         return $result; 
//     }
//     function validimi(){
//         if(!preg_match("/^[A-Z][a-z]{0,}/",$this-> $emri)){
//             function_alert("EMRI DUHET TE PERMBAJE SHKORNJEN E PARE TE MADHE DHE VETEM SHKRONJA");
//         }
//         if(!preg_match("/^[A-Z][a-z]{0,}/",$this-> $mbiemri)){
//             function_alert("MBIEMRI DUHET TE PERMBAJE SHKORNJEN E PARE TE MADHE DHE VETEM SHKRONJA");
//         }
//         if(!preg_match("/^[A-Za-z0-9_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z]{2,6}$/",$this-> $email)){
//             function_alert("JU LUTEM SHKRUAJENI MIRE EMAILIN");
//         }
//         if(!preg_match("/^[A-Z]+[A-Za-z.!@#$%^&*-+]+[0-9]{3}$/",$this-> $password)){
//             function_alert("PASSWORD DUHET TE PERMBAJE SHKRONJEN E PARE TE MADHE DHE 3 NUMRA NE FUND");
//         }
//         if($this-> $password !== $this-> $konfirm){
//             function_alert("PASSWORD DUHET TE JETE I BARABART ME PASWORD CONFIRM");
//         }
//         if(!preg_match("^(1[89]|[2-9][0-9])$",$this-> $mosha)){
//             function_alert("MOSHA ME E MADHE SE 18");
//         }
//         function usermatch(){
//         $result;
//         if(empty( $this->checkUser($this->$name,$this->$email)){
//             $result = false;
//         }
//         else{
//             $result = true;
//         }
//         return $result; 
//     }
    
//     }
// }
// $signup = new SignupContr($emri,$mbiemri,$adresa,$email,$password,$konfirm,$mosha, $gjinia);
// $sql="INSERT INTO personi (emri,mbiemri,password,adresa) VALUES (?,?,?,?)";
}
?>  