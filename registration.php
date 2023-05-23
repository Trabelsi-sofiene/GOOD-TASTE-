<?php
/*require 'config.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}*/

try {
  $bdd = new PDO('mysql:host=localhost;dbname=reglog', 'root', '');
} catch(Exception $e) {
  die('Erreur : '.$e->getMessage());
}
if (isset($_POST['name'])) {
  $name = $_POST['name'];
} else {

  echo "The 'id' key is not defined.";
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $bdd->prepare("INSERT INTO tb_user VALUES ( ?, ?, ?,?)");
$stmt->execute([ $name, $username, $email, $password]);

echo 'votre compte a été crée avec succè';
?>

