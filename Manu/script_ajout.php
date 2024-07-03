<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script_Ajout</title>
</head>
<body>
    

<?php

session_start();
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "record";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données";
  } catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
  }

//   if (isset($_FILES['picture'])) {

//     $file = $_FILES['picture'];
//     $tmp_name = $file['tmp_name'];
//     $name = $file['name'];

//     // Vérification du type de fichier et de la taille

//     if ($type != 'image/jpeg' && $type != 'image/png') {
//         echo 'Erreur : seul les fichiers JPEG et PNG sont autorisés.';
//         exit;
//     }

//     if ($size > 1024 * 1024) { // 1Mo
//         echo 'Erreur : le fichier est trop volumineux.';
//         exit;
//     }
   
//     $cheminimage = $name;
   
//     $destination = 'pictures(1)/' . $cheminimage;


//     // Déplacement du fichier uploadé

//     if (move_uploaded_file($tmp_name, $destination)) {

//         echo 'Fichier uploadé avec succès !';

//     } else {

//         echo 'Erreur lors de l\'upload du fichier.';

//     }

// }

// Ajouter un nouvel disc
$stmt = $conn->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) 
VALUES (:title, :year, :picture, :label, :genre, :prix, :artist_id);");
 $stmt->bindValue(':title',$_POST["title"]);
 $stmt->bindValue(':year', $_POST["year"]);
 $stmt->bindParam(':picture', $_POST["picture"]);
 $stmt->bindValue(':label', $_POST["label"]);
 $stmt->bindValue(':genre', $_POST["genre"]);
 $stmt->bindValue(':prix', $_POST["prix"]);
 $stmt->bindValue(':artist_id', $_POST["artist"]);
 $stmt->execute();

 header('location:indexBD.php');
 ?>






</body>
</html>

