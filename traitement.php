
<?php
require('config.php');
$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"]; 
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
   // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
   $name = stripslashes($_REQUEST['name']);
   $name = mysqli_real_escape_string($conn, $name); 
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  //requéte SQL + mot de passe crypté
    $query = "INSERT into admin (name, username, email, password)
              VALUES ('$name', '$username', '$email', '".hash('sha256', $password)."')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='success'>
             <h3>Congratulation for your subscription !!!.</h3>
             <p>Click here to SIGN IN  <a href='index1.php'>SIGN IN</a></p>
       </div>";
    }
}else{ 
}
?>