<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
Minupulation des BD/PDO
Utiliser un langage côté serveur
<?php

new PDO
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "record";

$requete = $db->query("SELECT * FROM disc,title,year,picture,label,genre,price,artiste");
$tableau = requete->fetchALL(PDO::FETCH_OBJ);
$requete->closeCursor();

<?php foreach($tableau as $liste_disc);?>
  <div>  
   <?=$disc->list_disc ?>
  </div>
  <?php 'endforeach';?>














    
</body>
</html>