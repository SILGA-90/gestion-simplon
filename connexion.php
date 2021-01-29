
<?php

  try
  {
   $bd = new PDO ('mysql:host=localhost;dbname=administrateur','root', '');
}

  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }
if(extension_loaded('PDO')){ echo 'opération reussi apprenant ajouté';
}
?>
