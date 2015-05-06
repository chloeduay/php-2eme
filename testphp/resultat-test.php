<table border="5"> 
<?php

$nombre= $_POST['nombre']; // Variables

echo "<caption>Table de multiplication en base $nombre</caption>"; // Titre du tableau
echo "<tr><th>x</th>"; // Cellule haut gauche

for($i=0;$i<$nombre;$i++)
	echo "<th>$i</th>";

echo "</tr>\n";

for($j=0;$j<$nombre;$j++)
{
 	echo "<tr><th>$j</th>";

	for($i=0;$i<$nombre;$i++)
	{
		 echo "<td>".base_convert($j*$i, 10, $nombre)."</td>"; // Affichage dans les cellules
	}
	
	echo "</tr>";
 }
?>
</table>
<br>
<table border="5"> 
<?php
echo "<caption>Table d'addition en base $nombre</caption>"; // Titre du tableau
echo "<tr><th>+</th>"; // Cellule haut gauche

for($i=0;$i<$nombre;$i++)
	echo "<th>$i</th>";

echo "</tr>\n";

for($j=0;$j<$nombre;$j++)
{
 	echo "<tr><th>$j</th>";

	for($i=0;$i<$nombre;$i++)
	{
		 echo "<td>".base_convert($j+$i, 10, $nombre)."</td>"; // Affichage dans les cellules
	}
	
	echo "</tr>";
 }
?>
</table>

