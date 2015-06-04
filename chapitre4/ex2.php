<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 1 Chap 4</title>
    <style>
      * {
        font-family: Arial;
        font-size: 12pt;
      }
      table {
          border-collapse: collapse;
      }
      
      table, td, tr, th {
          border: 1px solid black;
      }
    </style>
  </head>
  <body>
      <h1>Voici la liste des emails</h1>
    <?php
        $new = new mysqli('localhost', 'cpnv', 'cpnv1234', 'ch04');
        if ($new->connect_errno) {
          die("Problème de connexion({$new->connect_errno}))" . $new->connect_errno);
        }
        $request = "SELECT id, email, date_inscription FROM liste_email";
        $result = $new->query($request);
        
        echo "<table>";
        echo  "<tr>";
        echo    "<th>Id</th><th>Email</th><th>Date</th><th>Options</th>";
        echo  "</tr>";
        foreach ($result as $email) {
          echo "<tr>";
          echo "<td>{$id['id']}</td><td>{$email['email']}</td><td>{$email['date_inscription']}</td><td>{$Options['Options']}</td>";
          echo "</tr>";
        }
        echo "</table>";
        $new->close();
    ?>
  </body>
</html> 

