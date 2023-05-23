

<?php
/*
$firstName=$_Post['name'];
$datebirth=$_Post['datebirth'];
$email=$_Post['email'];
$mobilenumber=$_Post['mobilenumber'];
$gender=$_Post['gender'];
$occupation=$_Post['occupation'];
$idtype=$_Post['idtype'];
$idnumber=$_Post['idnumber'];
$issueddate=$_Post['issueddate'];
$issuedstate=$_Post['issuedstate'];
$expirydate=$_Post['expirydate'];
$civilstatus=$_Post['civilstatus'];

$conn=new mysqli('localhost','root','formulaire')
if ($conn-> connect_error){
    die('connection Failed :'$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into formulaire chefs(firstname,datebirth,email,mobilenumber,gender,occupation,
    idtype,idnumber,issueddate,issuedstate,expirydate,civilstatus)values(?,?,?,?,?,?,?,?,?,?,?,?)")
    $stmt->bind_param("sssssi",$firstName,$datebirth,$email,$mobilenumber,$gender,$occupation,$idtype,$idnumber,$issueddate,$issuedstate,$expirydate,$civilstatus)
    $stmt->execute();
    echo="registration succesfully...";
    $stmt->close();
    $conn->close();
}
try{
  $conn=new PDO('mysql:host=localhost;dbname=mydata;charset=utf8','root','');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$firstName=$_Post['name'];
$datebirth=$_Post['datebirth'];
$email=$_Post['email'];
$mobilenumber=$_Post['mobilenumber'];
$gender=$_Post['gender'];
$occupation=$_Post['occupation'];
$idtype=$_Post['idtype'];
$idnumber=$_Post['idnumber'];
$issueddate=$_Post['issueddate'];
$issuedstate=$_Post['issuedstate'];
$expirydate=$_Post['expirydate'];
$civilstatus=$_Post['civilstatus'];


$requette="INSERT INTO formchefs (name,datebirth,email,mobilenumber,gender,occupation,idtype,idnumber,issueddate,issuedstate,expirydate,civilstatus)
 values ('$firstName', '$datebirth', '$email', '$mobilenumber','$gender','$occupation','$idtype','$idnumber','$issuedstate','$expirydate', '$civilstatus' );  ";
 

 $conn->exec($requette);
 
 header('location:http://localhost/Good-Taste-main/index.html');
}
catch (PDOException $e) {
  die('Erreur : ' . $e->getMessage());
}




?>



     
try {
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire', 'root', '');
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

if (isset($_POST['pseudo'])) {
  $pseudo = $_POST['pseudo'];
} else {
  // handle the error
  echo "The 'pseudo' key is not defined.";
}
$email=$_POST['email'];
$mobilenumber=$_POST['mobilenumber'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$idtype=$_POST['idtype'];
$idnumber=$_POST['idnumber'];
$issuedstater=$_POST['issuedstater'];
$civilstatus=$_POST['civilstatus'];
$yearsofexp=$_POST['yearsofexp'];
$positionsoccupied=$_POST['positionsoccupied'];
$carrer=$_POST['carrer'];

$bdd->exec("INSERT INTO formchefs VALUES ('$pseudo','$email','$mobilenumber','$gender','$occupation','$idtype','$idnumber','$issuedstater','$civilstatus','$yearsofexp','$positionsoccupied','$carrer')");

echo 'Votre candidature a été bien envoyée!';
?>

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulaire";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate input data
  if (empty($_POST["pseudo"])) {
    die("Full Name is required");
  } else {
    $pseudo = mysqli_real_escape_string($conn, $_POST["pseudo"]);
  }

  $dateofbirth = mysqli_real_escape_string($conn, $_POST["dateofbirth"]);

  if (empty($_POST["email"])) {
    die("Email is required");
  } else {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
  }

  if (empty($_POST["mobilenumber"])) {
    die("Mobile Number is required");
  } else {
    $mobilenumber = mysqli_real_escape_string($conn, $_POST["mobilenumber"]);
  }

  $gender = mysqli_real_escape_string($conn, $_POST["gender"]);

  if (empty($_POST["occupation"])) {
    die("Occupation is required");
  } else {
    $occupation = mysqli_real_escape_string($conn, $_POST["occupation"]);
  }

  $idtype = mysqli_real_escape_string($conn, $_POST["idtype"]);

  if (empty($_POST["idnumber"])) {
    die("ID Number is required");
  } else {
    $idnumber = mysqli_real_escape_string($conn, $_POST["idnumber"]);
  }

  $issueddate = mysqli_real_escape_string($conn, $_POST["issueddate"]);

  if (empty($_POST["issuedstater"])) {
    die("Issued State is required");
  } else {
    $issuedstater = mysqli_real_escape_string($conn, $_POST["issuedstater"]);
  }

  $expirydate = mysqli_real_escape_string($conn, $_POST["expirydate"]);

  $civilstatus = mysqli_real_escape_string($conn, $_POST["civilstatus"]);

  $yearsofexp = mysqli_real_escape_string($conn, $_POST["yearsofexp"]);

  $positionsoccupied = mysqli_real_escape_string($conn, $_POST["positionsoccupied"]);

  $carrer = mysqli_real_escape_string($conn, $_POST["carrer"]);

  // Prepare and execute SQL query
  $sql = "INSERT INTO formchefs (pseudo, dateofbirth, email, mobilenumber, gender, occupation, idtype, idnumber, issueddate, issuedstater, expirydate, civilstatus, yearsofexp, positionsoccupied, carrer) VALUES ('$pseudo', STR_TO_DATE('$dateofbirth', '%Y-%m-%d'), '$email', '$mobilenumber', '$gender', '$occupation', '$idtype', '$idnumber', STR_TO_DATE('$issueddate', '%Y-%m-%d'), '$issuedstater', STR_TO_DATE
  */

  try {
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire', 'root', '');
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}
  if (isset($_POST['pseudo'])) {
    $pseudo = $_POST['pseudo'];
  } else {
  
    echo "The 'pseudo' key is not defined.";
  }
  
  $email = $_POST['email'];
  $mobilenumber = $_POST['mobilenumber'];
  $gender = $_POST['gender'];
  $occupation = $_POST['occupation'];
  $idtype=$_POST['idtype'];
  $idnumber=$_POST['idnumber'];
  $issueddate=$_POST['issueddate'];
  $issuedstate=$_POST['issuedstate'];
  $civilstatus=$_POST['civilstatus'];
  $yearsofexp=$_POST['yearsofexp'];
  $position=$_POST['position'];
  $profcarrer=$_POST['profcarrer'];
  
  $stmt = $bdd->prepare("INSERT INTO formchefs VALUES (?, ?, ?,?,?,?,?,?,?,?,?,?,?)");
  $stmt->execute([$pseudo, $email, $mobilenumber, $gender, $occupation, $idtype , $idnumber , $issueddate , $issuedstate, $civilstatus, $yearsofexp, $position,$profcarrer]);
  
  echo 'Votre candidature a été bien envoyée!';



  ?>
  
