<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>

 //Comment écrire une requête pour 
//interroger la base de données<br>


<?php 
 try 
{        
     $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (Exception $e) {
     echo "Erreur : " . $e->getMessage() . "<br>";
     echo "N° : " . $e->getCode();
     die("Fin du script");
 }       

?>

// Comment écrire des requêtes de modification 
// de la base de données<br>

<?php 


$db = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district', 'admin', 'Afpa1234');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $requete = $db->prepare("DELETE FROM plats WHERE active != 'YES'");
//   $requete->execute();
//  $plats = $requete->fetchAll(PDO::FETCH_OBJ);
//  $requete->closeCursor();

 try {

    $requete = $db->prepare("DELETE FROM plat WHERE active!= 'YES'");
  
    $requete->execute();
  
    $plats = $requete->fetchAll(PDO::FETCH_OBJ);
  
    $requete->closeCursor();
  
  } catch (PDOException $e) {
  
    echo 'Erreur lors de la suppression des plats : '. $e->getMessage();
  
  }

?>

    
</body>
</html>