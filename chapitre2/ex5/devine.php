<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>jeu de devinette</title>
    <meta charset="utf-8">
  </head>
    <body>
    <h1>jeu de devinette</h1>
    <form name="resultat" action="resultat.php" method="post">
        <div>
            <label for="devine">deviner le nombre entre 0 et 5</label>
            <input type="text" name="devine" id="devine" />
        </div>
        <input type="submit" value="tester" name="tester">
    </form>
    <?php
    $nombre='';
    $nbr_min= 0;
    $nbre_max= 5;
    ?>
        
    </body>
</html> 
