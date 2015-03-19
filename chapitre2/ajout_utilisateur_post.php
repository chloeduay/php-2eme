<?php
$login=$_POST["login"];
$password=$_POST["password"];
$majeur=$_POST["majeur"];
$type=$_POST["type"];
$choix1=$_POST["choix1"];
$choix2=$_POST["choix2"];
?>

<!DOCTYPE html>
<html lang="fr">
  <head meta charset="utf-8">
    <title>Ajout utilisateur</title>
  </head>
  <body>
    <h1>Voici les valeurs transmises par l'utilisateur</h1>
   <p>Login <?php echo $login; ?></p>
   <p>Mot de passe <?php echo $password; ?></p>
  </body>
</html>
