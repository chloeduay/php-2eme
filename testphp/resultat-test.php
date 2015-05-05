<table border=5> 
<?
$nombre= $_POST['nombre']; // Variables

echo "<caption>Table de multiplication en base $nombre</caption>"; // Titre du tableau
echo "<tr><th>x</th>"; // Cellule haut gauche

for($i=1;$i<=$nombre;$i++)
	echo "<th>$i</th>";
	echo "</tr>\n";

	for($j=1;$j<=$nombre;$j++)
	{
 	 	echo "<tr><th>$j</th>";

 		 for($i=1;$i<=$nombre;$i++)
  	{
    	echo "<td>".($j*$i)."</td>"; // Affichage dans les cellules
  }
}
?>
</table>
<br>
<table border=5> 
<?
echo "<caption>Table d'addition en base $nombre</caption>"; // Titre du tableau
echo "<tr><th>+</th>"; // Cellule haut gauche

for($i=1;$i<=$nombre;$i++)
	echo "<th>$i</th>";
	echo "</tr>\n";

	for($j=1;$j<=$nombre;$j++)
	{
	  echo "<tr><th>$j</th>";

		  for($i=1;$i<=$nombre;$i++)
		  {
		    echo "<td>".($j+$i)."</td>"; // Affichage dans les cellules
		  }
}
?>
</table>
