<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=reservation', 'root', '');
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}
  if (isset($_POST['fullname'])) {
    $fullname = $_POST['fullname'];
  } else {
  
    echo "The 'fullname'  is not defined.";
  }
  
  $date3 = $_POST['date3'];
  $email = $_POST['email'];
  $people = $_POST['people'];
  $hour = $_POST['hour'];
  $numberp = $_POST['numberp'];



  $stmt = $bdd->prepare("INSERT INTO reserve VALUES (?,?,?,?,?,?)");
  $stmt->execute([$fullname, $email, $date3, $people, $hour, $numberp ]);
  
  echo 'Votre reservation a été bien retenue!';



  ?>