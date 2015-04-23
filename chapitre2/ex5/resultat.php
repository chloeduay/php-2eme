<?php

$valeurADeviner =(int) $POST ['valeurADeviner'];
$valeurEntree = (int) $POST ['nbr'];

$gagne = $valeurADeviner == $ValeurEntree;

if ($gagne){
echo "You win";
}else{
$titre = "You loose";

?>

<!DOCTYPE html>
<html>
    <head>
        <title> <?= $titre?></title>
        <meta content="">
        
            <?php
            if ($gagne){
                $titre = "You win";
            }else{
                $titre = "You loose";
                ?>
    </head>
    <body>
        <?php
        if ($gagne){
            echo "<h1> Vous avez gagné </h1>";
            }else{
?>
<h1> Vous avez perdu</h1>
<a href="javascript:history.back()">réesayer/a>
<?php
}
?>
    </body>
</html>
