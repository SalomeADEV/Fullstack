<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes PDO</title>
</head>
<body>
/*
Construction d'une requête SQL

<?php

// ... code de connexion à la base ...
$requete = $db->query("SELECT * FROM artist");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor(); 

?> */

<body>
    <?php foreach ($tableau as $artist): ?>
        <div>
            <?= $artist->artist_name?>
        </div>
    <?php endforeach; ?>
</body>







