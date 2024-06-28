<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PDO</title>
</head>
<body>

    Connexion à un serveur mysql
    Gestion des erreurs de connecxion

<?php
//
 $db = new PDO('mysql:host=localhost;dbname=record;charset=utf8', 'root', '');   
?>

  /*<?php  
try 
{
    $db = new PDO("mysql:host=localhost;charset=utf8;dbname=record", "root", "");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
} 
?>*/


//Exemple I : connexion à la base de données

<?php

try
{
    $db = new PDO('mysql :host=localhost;charset=utf8;dbname=record','root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}   catch (Exception $e){
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");

}

?>//


</body>
</html>

