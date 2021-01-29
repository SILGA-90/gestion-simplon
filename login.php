
<?php
require('config.php');
session_start();

if (isset($_POST['email']))
{
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `admin` WHERE email='$email' and password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['email'] = $email;
      header("Location:simplon-appli/index.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    echo $message;
    

     
  }
}
?>
