<?php
$nombre= 0;
const NBR_MAX = '12';
const NBR_MIN = '6';

$nombre= rand (NBR_MIN, NBR_MAX);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Test</title>
    <meta charset="utf-8">
  </head>
    <body>
    <p> Entre un nombre aléatoire</p>
    <form name="form1" method="post" action="resultat.php" >
        <input type="number" name="nbr"/>
        <p>l
        <input type="submit" value="tester"/>
        <br>
        </p>
        <input type="hidden"
                name="valeurADeviner"
                value="<?= $nombre ?>" />
    </body>
</html> 
 
