<!DOCTYPE html>
<html>
    <head>

    <body>
        <?php 
        mysqli_connect("localholst","root","")or die("Erreur");
        mysqli_select_db("form")or die ("la base de donnée est introuvable.");
if($_POST){
    $pseudo=$_POST['pseudo'];
    $password=$POST['password'];
    if(!empty($pseudo)AND !empty($password)){
        mysqli_query('INSERT INTO form1(pseudo,password) VALUES ("'.$pseudo.'", "'.$password.'")')or die('Erreur:'.mysql_error());
echo "OK!";
    }else echo "Erreur, un ou plusieurs champs est vide";
}
        ?>
<form method="post" action="">
pseudo:<input type="text" name="pseudo" /><br>
Mot de passe:<input type="password" name="password"/><br>
<input type="submit" value="Envoyer">
</form> 
</body>
</html>