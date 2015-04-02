<?php

if (!empty($_GET['nom'])) {
  
  $nom=$_GET['nom'];
    
} else {
    
    //si on arrive ici,c'est que $_GET['nom'] n'est pas défini.
    // Ce qui veut dire qu'on vient peut etre de post.html
    if(! empty($_POST['nom'])){
        $nom=$_POST['nom'];
    } else {
        $nom='non defini, vous devez utiliser get.html ou post.html';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Le fichier traitement</title>
    <meta charset="utf-8">
  </head>
    <body>
    <?= $nom ?>
    </body>
</html> 
