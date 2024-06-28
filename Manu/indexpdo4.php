<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>

<?php 
// Ecrire des requêtes de modification de la base de données...

//supprimer les commandes

$db = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district', 'admin', 'Afpa1234');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = $db->prepare("DELETE FROM commande WHERE  commande = 'livré'");
$requete->execute();
$commande = $requete->fetch(PDO::FETCH_OBJ);
$requete ->closeCursor();
?>


// Ecrire un script sql, ajouter une nouvelle categorie
  // et un plat dans cette nouvelle categorie

//use the_district;
  //UPDATE 'nouvelle'_categorie, INSERT INTO plat VALUES 'nouvelle' categorie;

  */  
    
  
    <?php
  //Ecrire une requête pour augmenter de 10% le prix
  //de la categorie Pizza

  $db = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district', 'admin', 'Afpa1234');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $requete = $db->prepare("INSERT INTO plat(libelle, description, prix, image, id_categorie , active) IN values ('cheeseburger','c'est un burger',6.00,'cheeseburger.jpg',5,YES)");
  $prix = $requete->fetch(PDO::FETCH_OBJ);
  $requete->closeCursor();

  $requete = $db->prepare("UPDATE plat set prix = prix * 1,1");
  $prix = $requete->fetch(PDO::FETCH_OBJ);
  
  ?>

  



    
</body>
</html>