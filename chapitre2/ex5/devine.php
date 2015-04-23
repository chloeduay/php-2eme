<?php
$nombre= 0;
const NBR_MAX = '5';
const NBR_MIN = '1';

$nombre= rand (NBR_MIN, NBR_MAX);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Exercice 05</title>
    <meta charset="utf-8">
  </head>
    <body>
    <h3>jeu de devinette</h3>
    <p>Deviner le nombre entre 0 et 5</p>
    <form name="form1" method="post" action="resultat.php" >
        <input type="text" name="nbr"/>
        <p>
        <input type="submit" value="tester"/>
        <br>
        </p>
        <input type="hidden"
                name="valeurADeviner"
                value="<?= $nombre ?>" />
    </body>
</html> 
