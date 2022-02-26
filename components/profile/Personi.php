<?php
require_once('../../databaze/Database.php');

// TE DHENAT
class Personi extends Database
{
    private $id;
    private $emri;
    private $mbiemri;
    private $adresa;
    private $email;
    private $password;
    private $konfirm;

    
private $mosha;
    private $gjinia;    private $is_admin;

    public $db;
// protected $dbconn;    public $db;
    public function __construct($emri = '', $mbiemri = '', $adresa = '', $email = '', $password = '', $konfirm = '', $mosha = '', $gjinia = '', $is_admin = '')
    {

        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->adresa = $adresa;
        $this->email = $email;
        $this->password = $password;
        $this->konfirm = $konfirm;
        $this->mosha = $mosha;
        $this->gjinia = $gjinia;
        $this->is_admin = $is_admin;
    $this->db = new Database;
    // $this->dbconn = $this->connectDB();


    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setEmri($emri)
    {
        $this->emri = $emri;
    }
    public function getEmri()
    {
        return $this->emri;
    }
    public function setMbiemri($mbiemri)
    {
        $this->mbiemri = $mbiemri;
    }
    public function getMbiemri()
    {
        return $this->mbiemri;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setAdresa($adresa)
    {
        $this->adresa = $adresa;
    }
    public function getAdresa()
    {
        return $this->adresa;
    }
    public function setMosha($mosha)
    {
        $this->mosha = $mosha;
    }
    public function getMosha()
    {
        return $this->mosha;
    }
    public function setGjinia($gjinia)
    {
        $this->gjinia = $gjinia;
    }
    public function getGjinia()
    {
        return 'm';
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setKonfirm($konfirm)
    {
        $this->konfirm = $konfirm;
    }
    public function getKonfirm()
    {
        return $this->konfirm;
    }

    function insertoDhenat(Personi $person)
    {
        $db = new Database;
        $sql = "INSERT INTO personi(Emri,Mbiemri,Mosha,Adresa,Email,Passwordi,Gjinia) VALUES (:emri,:mbiemri,:mosha,:adresa,:email,:password,:gjinia)";
        $stmt = $db->prepare($sql);
        $stmt->execute(['emri' => $person->emri, 'mbiemri' => $person->mbiemri, 'mosha' => $person->mosha, 'adresa' => $person->adresa, 'email' => $person->email, 'password' => $person->password, 'gjinia' => $person->gjinia]);

        echo "<script>
            alert('Te dhenat jane ruajtur me sukses');
            document.location='Sign Up.php';
            </script>";

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
//    
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